<?php

namespace App\Datatables;

use Sebastienheyd\Boilerplate\Datatables\Button;
use Sebastienheyd\Boilerplate\Datatables\Column;
use Sebastienheyd\Boilerplate\Datatables\Datatable;
use App\Models\product;

class ProductDatatable extends Datatable
{
    public $slug = 'product';

    public function datasource()
    {
        return product::where('status', 1)->get([
            'id',
            'nama',
            'icon',
            'foto',
            'status',]
        );
    }

    public function setUp()
    {
    }

    public function columns(): array
    {
        return [
            Column::add('ID')
                ->data('id'),
                
            Column::add('Nama Produk')
                ->data('nama'),
                
            Column::add('Foto')
                ->data('foto', function (product $product) {
                    $badge1 = '<a target="_blank" href="'.$product->foto.'"><img src="'.$product->foto.'" class="img-fluid mb-2" alt="Foto" height=10 width=30>
                        </a>';
                        return join([$badge1]);
                    }),
                    
            Column::add('Icon')
                ->data('icon'),

            Column::add('Aksi')
                ->actions(function(product $product) {
                    return join([
                        Button::edit('boilerplate.edit-product', $product->id),    
                        Button::delete('boilerplate.delete-product', $product->id),           
                    ]);
                    
                })
        ];
    }
}