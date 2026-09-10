<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Command;

use FGTCLB\HisClientFacade\Model\EntityInterface;
use FGTCLB\HisConnector\Configuration\ConfigurationRegistry;
use FGTCLB\HisConnector\Configuration\InvalidSyncConfiguration;
use FGTCLB\HisConnector\Configuration\SyncConfiguration;
use FGTCLB\HisConnector\Service\DataFetcher;
use FGTCLB\HisConnector\Service\DataSynchronizer;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'hisconnector:sync', description: 'Performs data synchronizations from HIS')]
final class SyncCommand extends Command
{
    public function __construct(
        private readonly ConfigurationRegistry $configurationRegistry,
        private readonly DataFetcher $dataFetcher,
        private readonly DataSynchronizer $dataSynchronizer,
    ) {
        parent::__construct();
    }

    public function configure(): void
    {
        $this
            ->addArgument(
                'config',
                InputArgument::REQUIRED,
                'Path to synchronization configuration file',
                null,
                fn() => array_values(array_map(
                    fn(SyncConfiguration $syncConfig): string => (string)$syncConfig->originalFile,
                    $this->configurationRegistry->getValid(),
                )),
            )
            ->addOption(
                'offset',
                null,
                InputOption::VALUE_REQUIRED,
                'Start synchronizing at this record index',
                0,
            )
            ->addOption(
                'limit',
                null,
                InputOption::VALUE_REQUIRED,
                'Limit synchronizing to this number of records',
            )
            ->addOption(
                'storagePage',
                null,
                InputOption::VALUE_REQUIRED,
                'Override page where records should be stored',
            )
            ->addOption(
                'fileStorageFolder',
                null,
                InputOption::VALUE_REQUIRED,
                'Override folder where files should be stored',
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        \TYPO3\CMS\Core\Core\Bootstrap::initializeBackendAuthentication();
        $config = $this->configurationRegistry->getByPath($input->getArgument('config'));
        if ($config === null) {
            $output->writeln('Specified configuration file does not exist.');
            return Command::FAILURE;
        }
        if ($config instanceof InvalidSyncConfiguration) {
            $output->writeln(sprintf(
                'Specified configuration file is invalid: %s (%d)',
                $config->exception->getMessage(),
                $config->exception->getCode(),
            ));
            return Command::FAILURE;
        }
        if ($input->getOption('storagePage') !== null) {
            $config = $config->withStoragePage((int)$input->getOption('storagePage'));
        }
        if ($input->getOption('fileStorageFolder') !== null) {
            $config = $config->withFileStorageFolder((string)$input->getOption('fileStorageFolder'));
        }
        $offset = (int)$input->getOption('offset');
        $limit = $input->getOption('limit') !== null ? (int)$input->getOption('limit') : null;

        $syncItems = $this->dataFetcher->fetchSource($config->source);
        if ($syncItems === null) {
            $output->writeln('Nothing to synchronize');
            return Command::SUCCESS;
        }
        if ($syncItems instanceof EntityInterface) {
            if ($offset === 0 && ($limit ?? 1) > 0) {
                $syncItems = [$syncItems];
                $output->writeln('Processing single record...');
            } else {
                $output->writeln('Nothing to synchronize');
                return Command::SUCCESS;
            }
        } else {
            $total = $syncItems->count();
            $syncItems = $syncItems->slice($offset, $limit);
            $output->writeln(sprintf(
                'Processing %d of total %d records...',
                $syncItems->count(),
                $total,
            ));
        }
        $output->writeln('');
        $errors = 0;
        foreach ($syncItems as $item) {
            $output->write(sprintf(
                '%s:%s (processing...)',
                get_class($item),
                $item->getIdentifier(),
            ));
            try {
                $syncedRecords = $this->dataSynchronizer->processEntity($item, $config);
                $output->write(sprintf(
                    "\r%s:%s (%d record(s) synchronized)",
                    get_class($item),
                    $item->getIdentifier(),
                    count($syncedRecords),
                ));
            } catch (\FGTCLB\HisClientFacade\Exception\Exception $e) {
                $output->write(sprintf(
                    "\r%s:%s (error while fetching details: %s (%d))",
                    get_class($item),
                    $item->getIdentifier(),
                    $e->getMessage(),
                    $e->getCode(),
                ));
                $errors++;
            } catch (\FGTCLB\HisConnector\Exception\Exception $e) {
                $output->write(sprintf(
                    "\r%s:%s (error while synchronizing: %s (%d))",
                    get_class($item),
                    $item->getIdentifier(),
                    $e->getMessage(),
                    $e->getCode(),
                ));
                $errors++;
            }
            $output->writeln('');
        }
        if ($errors > 0) {
            $output->writeln(['', sprintf('Processed: %d (%d with errors)', count($syncItems), $errors)]);
        } else {
            $output->writeln(['', sprintf('Processed: %d', count($syncItems))]);
        }
        return Command::SUCCESS;
    }
}
