<?php

namespace App\Menu;

use Sebastienheyd\Boilerplate\Menu\Builder;

class Pages
{
    public function make(Builder $menu)
    {
        $menu->add('Pages', [
            'route' => 'boilerplate.pages',
            'active' => 'boilerplate.pages,boilerplate.create-page,boilerplate.edit-page',
            'permission' => 'show-pages',
            'icon' => 'file-lines',
            'order' => 1010,
        ]);
    }
}
