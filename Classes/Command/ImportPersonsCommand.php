<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Command;

use FGTCLB\HisClientFacade\Model\Person;
use FGTCLB\HisClientFacade\Repository\PersonRepository;
use FGTCLB\HisConnector\Exception\ImportException;
use FGTCLB\HisConnector\Service\DataImporter;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use TYPO3\CMS\Core\Configuration\Loader\YamlFileLoader;
use TYPO3\CMS\Core\Utility\GeneralUtility;

#[AsCommand('hisconnector:persons:import')]
final class ImportPersonsCommand extends Command
{
    public function __construct(
        private readonly PersonRepository $personRepository,
        private readonly YamlFileLoader $yamlFileLoader,
        private readonly DataImporter $dataImporter,
    ) {
        parent::__construct();
    }

    public function configure(): void
    {
        $this
            ->addArgument(
                'config',
                InputArgument::REQUIRED,
                'Path to configuration file to use for import'
            )
            // TODO only for testing purposes, should be part of mapping/filtering configuration later
            ->addOption(
                'storagePage',
                null,
                InputOption::VALUE_REQUIRED,
                'Page where imported records should be stored',
                0,
            )
            ->addOption(
                'pictureKey',
                null,
                InputOption::VALUE_REQUIRED,
                'HIS key to be used for profile pictures',
                1,
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        \TYPO3\CMS\Core\Core\Bootstrap::initializeBackendAuthentication();
        $config = $this->yamlFileLoader->load(
            GeneralUtility::getFileAbsFileName($input->getArgument('config'))
        );

        $persons = $this->personRepository->findByRolesForLanguage(
            array_map(intval(...), $config['filter']['person']['roles']),
            $config['filter']['language'],
        );
        foreach ($persons as $person) {
            /*
            try {
                $output->writeln(sprintf(
                    '%s: %s (%d addresses, %d pictures, %d functions, %d accounts, %d attributes)',
                    $person->id,
                    $person->surname,
                    count($person->getContactDetails()),
                    count($person->getPictures((int)$input->getOption('pictureKey'))),
                    count($person->getFunctions()),
                    count($person->getAccounts()),
                    count($person->getAttributes()),
                ));
            } catch (\FGTCLB\HisClientFacade\Exception\Exception $e) {
                $output->writeln(sprintf(
                    '%s: %s (error while fetching details: %s)',
                    $person->id,
                    $person->surname,
                    $e->getMessage(),
                ));
            }
            */

            $output->writeln(sprintf(
                '%s: %s (importing...)',
                $person->id,
                $person->surname,
            ));

            try {
                $this->dataImporter->importEntity(
                    $person,
                    $config['fieldMapping'][Person::class],
                    (int)$input->getOption('storagePage'),
                );
            } catch (\FGTCLB\HisClientFacade\Exception\Exception $e) {
                $output->writeln(sprintf(
                    '%s: %s (error while fetching details: %s)',
                    $person->id,
                    $person->surname,
                    $e->getMessage(),
                ));
            } catch (ImportException $e) {
                $output->writeln(sprintf(
                    '%s: %s (error while importing: %s)',
                    $person->id,
                    $person->surname,
                    $e->getMessage(),
                ));
            }
        }
        $output->writeln(['', 'Total: ' . count($persons)]);
        return Command::SUCCESS;
    }
}
