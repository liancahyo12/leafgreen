<?php

namespace App\Menu;

use Sebastienheyd\Boilerplate\Menu\Builder;

class Clients
{
    public function make(Builder $menu)
    {
        $menu->add('Clients', [
            'route' => 'boilerplate.clients',
            'active' => 'boilerplate.clients',
            'permission' => 'show_client',
            'icon' => 'handshake',
            'order' => 100,
        ]);
    }
}
