<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Command;

use FGTCLB\HisClientFacade\Repository\PersonRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;

#[AsCommand('hisconnector:persons:import')]
final class ImportPersonsCommand extends Command
{
    public function __construct(
        private readonly PersonRepository $personRepository,
        private readonly ExtensionConfiguration $extensionConfiguration,
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $hisConfiguration = $this->extensionConfiguration->get('his_connector', 'his');

        $persons = $this->personRepository->findByRolesForLanguage(
            array_map(intval(...), explode(',', $hisConfiguration['relevantRoles'])),
            $hisConfiguration['language'],
        );
        foreach ($persons as $person) {
            try {
                $output->writeln(sprintf(
                    '%s: %s (%d addresses, %d pictures, %d functions)',
                    $person->id,
                    $person->surname,
                    count($person->getContactDetails()),
                    count($person->getPictures((int)$hisConfiguration['pictureKey'])),
                    count($person->getFunctions()),
                ));
            } catch (\FGTCLB\HisClientFacade\Exception\Exception $e) {
                $output->writeln(sprintf(
                    '%s: %s (error while fetching details: %s)',
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
