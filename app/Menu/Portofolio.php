<?php

namespace App\Menu;

use Sebastienheyd\Boilerplate\Menu\Builder;

class Portofolio
{
    public function make(Builder $menu)
    {
        $menu->add('Portofolio', [
            'route' => 'boilerplate.portfolios',
            'active' => 'boilerplate.portfolios',
            'permission' => 'show_portfolio',
            'icon' => 'file-lines',
            'order' => 100,
        ]);
    }
}
