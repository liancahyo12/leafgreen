<?php

namespace App\Menu;

use Sebastienheyd\Boilerplate\Menu\Builder;

class Perusahaan
{
    public function make(Builder $menu)
    {
        $menu->add('Perusahaan', [
            'route' => 'boilerplate.company',
            'active' => 'boilerplate.company,boilerplate.edit-company',
            'permission' => 'show_company',
            'icon' => 'building',
            'order' => 1001,
        ]);
    }
}
