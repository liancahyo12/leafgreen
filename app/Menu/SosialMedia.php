<?php

namespace App\Menu;

use Sebastienheyd\Boilerplate\Menu\Builder;

class SosialMedia
{
    public function make(Builder $menu)
    {
        $menu->add('Sosial Media', [
            'route' => 'boilerplate.socials',
            'active' => 'boilerplate.socials',
            'permission' => 'show_social',
            'icon' => 'share-nodes',
            'order' => 100,
        ]);
    }
}
