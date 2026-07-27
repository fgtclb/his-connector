<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Command;

use FGTCLB\HisClientFacade\Repository\PersonRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand('hisconnector:persons:import')]
final class ImportPersonsCommand extends Command
{
    public function __construct(
        private readonly PersonRepository $personRepository,
    ) {
        parent::__construct();
    }

    public function configure(): void
    {
        // TODO only for testing purposes, should be part of mapping/filtering configuration later
        $this
            ->addArgument(
                'relevantRoles',
                InputArgument::OPTIONAL,
                'Comma-separated list of role ids that limit persons to be imported',
                '3, 69',
            )
            ->addArgument(
                'pictureKey',
                InputArgument::OPTIONAL,
                'HIS key to be used for profile pictures',
                1,
            )
            ->addArgument(
                'language',
                InputArgument::OPTIONAL,
                'Language to be imported',
                'de'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $persons = $this->personRepository->findByRolesForLanguage(
            array_map(intval(...), explode(',', $input->getArgument('relevantRoles'))),
            $input->getArgument('language'),
        );
        foreach ($persons as $person) {
            try {
                $output->writeln(sprintf(
                    '%s: %s (%d addresses, %d pictures, %d functions, %d accounts, %d attributes)',
                    $person->id,
                    $person->surname,
                    count($person->getContactDetails()),
                    count($person->getPictures((int)$input->getArgument('pictureKey'))),
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
        }
        $output->writeln(['', 'Total: ' . count($persons)]);
        return Command::SUCCESS;
    }
}
