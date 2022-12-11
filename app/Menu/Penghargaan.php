<?php

namespace App\Menu;

use Sebastienheyd\Boilerplate\Menu\Builder;

class Penghargaan
{
    public function make(Builder $menu)
    {
        $menu->add('Penghargaan', [
            'route' => 'boilerplate.awards',
            'active' => 'boilerplate.awards',
            'permission' => 'show_award',
            'icon' => 'award',
            'order' => 1006,
        ]);
    }
}
