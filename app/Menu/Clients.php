<?php

namespace App\Menu;

use Sebastienheyd\Boilerplate\Menu\Builder;

class Clients
{
    public function make(Builder $menu)
    {
        $menu->add('Clients', [
            'route' => 'boilerplate.clients',
            'active' => 'boilerplate.clients,boilerplate.create-client,boilerplate.edit-client',
            'permission' => 'show_client',
            'icon' => 'handshake',
            'order' => 1004,
        ]);
    }
}
