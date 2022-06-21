<?php

namespace App\Menu;

use Sebastienheyd\Boilerplate\Menu\Builder;

class Posts
{
    public function make(Builder $menu)
    {
        $menu->add('Posts', [
            'route' => 'boilerplate.posts',
            'active' => 'boilerplate.posts,boilerplate.create-post,boilerplate.edit-post',
            'permission' => 'show_post',
            'icon' => 'newspaper',
            'order' => 1002,
        ]);
    }
}
