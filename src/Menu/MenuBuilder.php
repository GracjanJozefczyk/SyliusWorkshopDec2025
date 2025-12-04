<?php

declare(strict_types=1);

namespace App\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class MenuBuilder
{
    public function __invoke(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $catalog = $menu->getChild('catalog');
        $catalog
            ->addChild('sylius.brand', ['route' => 'sylius_admin_brand_index'])
            ->setLabel('sylius.ui.brands')
        ;

    }
}
