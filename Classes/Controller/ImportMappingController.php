<?php

declare(strict_types=1);

namespace FGTCLB\HisConnector\Controller;

use FGTCLB\HisClientFacade\Collection\CollectionInterface;
use FGTCLB\HisClientFacade\Model\EntityInterface;
use FGTCLB\HisClientFacade\Schema\SchemaFactory;
use FGTCLB\HisConnector\Configuration\ConfigurationAnalyzer;
use FGTCLB\HisConnector\Configuration\ConfigurationRegistry;
use FGTCLB\HisConnector\Configuration\SyncConfiguration;
use FGTCLB\HisConnector\Service\DataFetcher;
use FGTCLB\HisConnector\Service\RepositoryRegistry;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Backend\Attribute\AsController;
use TYPO3\CMS\Backend\Routing\UriBuilder;
use TYPO3\CMS\Backend\Template\Components\ButtonBar;
use TYPO3\CMS\Backend\Template\Components\DocHeaderComponent;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Core\Http\RedirectResponse;
use TYPO3\CMS\Core\Imaging\IconFactory;
use TYPO3\CMS\Core\Imaging\IconSize;

#[AsController]
final readonly class ImportMappingController
{
    public function __construct(
        private ModuleTemplateFactory $moduleTemplateFactory,
        private IconFactory $iconFactory,
        private UriBuilder $uriBuilder,
        private ConfigurationAnalyzer $configurationAnalyzer,
        private DataFetcher $dataFetcher,
        private ConfigurationRegistry $configurationRegistry,
        private SchemaFactory $schemaFactory,
        private RepositoryRegistry $repositoryRegistry,
    ) {}

    public function listAction(ServerRequestInterface $request): ResponseInterface
    {
        $view = $this->moduleTemplateFactory->create($request);
        $view->assignMultiple([
            'validConfigFiles' => $this->configurationRegistry->getValid(),
            'invalidConfigFiles' => $this->configurationRegistry->getInvalid(),
        ]);
        return $view->renderResponse('ImportMapping/Index');
    }

    public function mappingAction(ServerRequestInterface $request): ResponseInterface
    {
        $example = (int)($request->getQueryParams()['example'] ?? 0);
        $configFile = $request->getQueryParams()['file'];
        $config = $this->configurationRegistry->getByPath($configFile);
        if (!$config instanceof SyncConfiguration) {
            return new RedirectResponse($this->uriBuilder->buildUriFromRoute('hisconnector'));
        }

        $view = $this->moduleTemplateFactory->create($request);

        $data = $this->dataFetcher->fetchSource($config->source);
        if ($data instanceof CollectionInterface) {
            $this->setUpDocHeader($view->getDocHeaderComponent(), 'hisconnector.mapping', $configFile, $example, $data);
            $example = $data->slice($example, 1)->first();
        } else {
            $this->setUpDocHeader($view->getDocHeaderComponent(), 'hisconnector.mapping', $configFile);
            $example = $data;
        }

        // TODO support non-entities?
        if (!$example instanceof EntityInterface) {
            $example = null;
        }

        $view->assignMultiple([
            'config' => $config,
            'analysis' => $this->configurationAnalyzer->analyze($config, $example),
        ]);
        return $view->renderResponse('ImportMapping/Mapping');
    }

    public function inspectAction(ServerRequestInterface $request): ResponseInterface
    {
        $example = (int)($request->getQueryParams()['example'] ?? 0);
        $configFile = $request->getQueryParams()['file'];
        $config = $this->configurationRegistry->getByPath($configFile);
        if (!$config instanceof SyncConfiguration) {
            return new RedirectResponse($this->uriBuilder->buildUriFromRoute('hisconnector'));
        }

        $view = $this->moduleTemplateFactory->create($request);

        $data = $this->dataFetcher->fetchSource($config->source);
        if ($data instanceof CollectionInterface) {
            $this->setUpDocHeader($view->getDocHeaderComponent(), 'hisconnector.inspect', $configFile, $example, $data);
            $example = $data->slice($example, 1)->first();
        } else {
            $this->setUpDocHeader($view->getDocHeaderComponent(), 'hisconnector.inspect', $configFile);
            $example = $data;
        }

        // TODO support non-entities?
        if (!$example instanceof EntityInterface) {
            $example = null;
        }

        $repository = $this->repositoryRegistry->getByVariableName($config->source->repository);
        $view->assignMultiple([
            'config' => $config,
            'schema' => $repository ? $this->schemaFactory->create($repository->getObjectType()) : null,
            'example' => $example,
        ]);
        return $view->renderResponse('ImportMapping/Inspect');
    }

    /**
     * @param CollectionInterface<EntityInterface>|null $examples
     */
    private function setUpDocHeader(
        DocHeaderComponent $docHeader,
        string $currentRoute,
        string $configFile,
        ?int $currentExample = null,
        ?CollectionInterface $examples = null,
    ): void {
        $buttonBar = $docHeader->getButtonBar();
        $uri = $this->uriBuilder->buildUriFromRoute('hisconnector');
        $closeButton = $buttonBar->makeLinkButton()
            ->setHref((string)$uri)
            ->setTitle('Close')
            ->setShowLabelText(true)
            ->setIcon($this->iconFactory->getIcon('actions-close', IconSize::SMALL));
        $buttonBar->addButton($closeButton, ButtonBar::BUTTON_POSITION_LEFT, 1);
        $uri = $this->uriBuilder->buildUriFromRoute($currentRoute, ['file' => $configFile, 'example' => $currentExample]);
        $reloadButton = $buttonBar->makeLinkButton()
            ->setHref((string)$uri)
            ->setTitle('Reload')
            ->setShowLabelText(true)
            ->setIcon($this->iconFactory->getIcon('actions-refresh', IconSize::SMALL));
        $buttonBar->addButton($reloadButton, ButtonBar::BUTTON_POSITION_LEFT, 2);

        if ($currentExample !== null && $examples instanceof CollectionInterface && $examples->count() > 1) {
            $prevExample = $currentExample - 1;
            $prevButton = $buttonBar->makeLinkButton()
                ->setTitle('Previous example')
                ->setShowLabelText(true)
                ->setIcon($this->iconFactory->getIcon('actions-arrow-start', IconSize::SMALL));
            if ($prevExample >= 0) {
                $uri = $this->uriBuilder->buildUriFromRoute($currentRoute, ['file' => $configFile, 'example' => $prevExample]);
                $prevButton->setHref((string)$uri);
            } else {
                $uri = $this->uriBuilder->buildUriFromRoute($currentRoute, ['file' => $configFile, 'example' => $currentExample]);
                $prevButton
                    ->setHref((string)$uri)
                    ->setDisabled(true);
            }
            $buttonBar->addButton($prevButton, ButtonBar::BUTTON_POSITION_RIGHT, 1);

            $nextExample = $currentExample + 1;
            $nextButton = $buttonBar->makeLinkButton()
                ->setTitle('Next example')
                ->setShowLabelText(true)
                ->setIcon($this->iconFactory->getIcon('actions-arrow-end', IconSize::SMALL));
            if ($examples->count() > $nextExample) {
                $uri = $this->uriBuilder->buildUriFromRoute($currentRoute, ['file' => $configFile, 'example' => $nextExample]);
                $nextButton->setHref((string)$uri);
            } else {
                $uri = $this->uriBuilder->buildUriFromRoute($currentRoute, ['file' => $configFile, 'example' => $currentExample]);
                $nextButton
                    ->setHref((string)$uri)
                    ->setDisabled(true);
            }
            $buttonBar->addButton($nextButton, ButtonBar::BUTTON_POSITION_RIGHT, 1);
        }

        $menu = $docHeader->getMenuRegistry()->makeMenu()
            ->setIdentifier('his_connector')
            ->setLabel('View');

        $uri = $this->uriBuilder->buildUriFromRoute('hisconnector.mapping', ['file' => $configFile, 'example' => $currentExample]);
        $menuItem = $menu->makeMenuItem()
            ->setTitle('Mapping Preview')
            ->setActive($currentRoute === 'hisconnector.mapping')
            ->setHref((string)$uri);
        $menu->addMenuItem($menuItem);
        $uri = $this->uriBuilder->buildUriFromRoute('hisconnector.inspect', ['file' => $configFile, 'example' => $currentExample]);
        $menuItem = $menu->makeMenuItem()
            ->setTitle('HIS Data Inspector')
            ->setActive($currentRoute === 'hisconnector.inspect')
            ->setHref((string)$uri);
        $menu->addMenuItem($menuItem);
        $docHeader->getMenuRegistry()->addMenu($menu);
    }
}
