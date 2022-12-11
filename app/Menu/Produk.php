<?php

namespace App\Menu;

use Sebastienheyd\Boilerplate\Menu\Builder;

class Produk
{
    public function make(Builder $menu)
    {
        $menu->add('Produk', [
            'route' => 'boilerplate.products',
            'active' => 'boilerplate.products,boilerplate.create-product,boilerplate.edit-product',
            'permission' => 'show_product',
            'icon' => 'briefcase',
            'order' => 1009,
        ]);
    }
}
