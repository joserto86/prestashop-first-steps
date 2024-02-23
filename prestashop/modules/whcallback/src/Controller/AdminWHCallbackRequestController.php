<?php

namespace WebHelpers\WHCallback\Controller;

use Doctrine\Common\Cache\CacheProvider;
use PrestaShop\PrestaShop\Core\CommandBus\TacticianCommandBusAdapter;
use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use Symfony\Component\HttpFoundation\Request;
use WebHelpers\WHCallback\Domain\WHCallbackRequest\Command\DeleteWHCallbackRequestCommand;
use WebHelpers\WHCallback\Filter\WHCallbackRequestFilter;
use WebHelpers\WHCallback\Grid\Definition\Factory\WHCallbackRequestDefinitionFactory;

class AdminWHCallbackRequestController extends FrameworkBundleAdminController
{
    private $cache;
    private $commandBus;
    public function __construct(CacheProvider $cache,
                                TacticianCommandBusAdapter $commandBus)
    {
        $this->cache = $cache;
        $this->commandBus = $commandBus;
    }

    public function listAction(WHCallbackRequestFilter $filters)
    {
        $callbackRequestGridFactory = $this->get('webhelpers.whcallback.grid.whcallbackrequest_grid_factory');
        $callbackRequestGrid = $callbackRequestGridFactory->getGrid($filters);
        return $this->render('@Modules/whcallback/views/templates/admin/list.html.twig',[
            'callbackRequestGrid' => $this->presentGrid($callbackRequestGrid)
        ]);
    }

    public function searchAction(Request $request)
    {
        $responseBuilder = $this->get('prestashop.bundle.grid.response_builder');
        return $responseBuilder->buildSearchResponse(
            $this->get('webhelpers.whcallback.grid.definition.factory.whcallbackrequest_grid_definition_factory'),
            $request,
            WHCallbackRequestDefinitionFactory::GRID_ID,
            'admin_whcallbackrequest_list'
        );
    }

    public function deleteAction(Request $request, $idRequest)
    {
        $this->commandBus->handle(new DeleteWHCallbackRequestCommand($idRequest));

        return $this->redirectToRoute('admin_whcallbackrequest_list');
    }
}