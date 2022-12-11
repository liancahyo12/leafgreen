<?php

namespace App\Menu;

use Sebastienheyd\Boilerplate\Menu\Builder;

class SosialMedia
{
    public function make(Builder $menu)
    {
        $menu->add('Sosial Media', [
            'route' => 'boilerplate.socials',
            'active' => 'boilerplate.socials,boilerplate.create-social,boilerplate.edit-social',
            'permission' => 'show_social',
            'icon' => 'share-nodes',
            'order' => 1002,
        ]);
    }
}
