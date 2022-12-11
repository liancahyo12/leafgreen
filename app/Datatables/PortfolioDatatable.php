<?php

namespace App\Datatables;

use Sebastienheyd\Boilerplate\Datatables\Button;
use Sebastienheyd\Boilerplate\Datatables\Column;
use Sebastienheyd\Boilerplate\Datatables\Datatable;
use App\Models\portfolio;

class PortfolioDatatable extends Datatable
{
    public $slug = 'portfolio';

    public function datasource()
    {
        return portfolio::where('status', 1)->get([
            'id',
            'judul',
            'sub_judul',
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
                
            Column::add('Nama Proyek')
                ->data('judul'),
            Column::add('Jenis Proyek')
                ->data('sub_judul'),

                Column::add('Foto')
                ->data('foto', function (portfolio $portfolio) {
                    $badge1 = '<a target="_blank" href="'.$portfolio->foto.'"><img src="'.$portfolio->foto.'" class="img-fluid mb-2" alt="Foto" height=10 width=30>
                    </a>';
                    return join([$badge1]);
                }),

            Column::add('Aksi')
                ->actions(function(portfolio $portfolio) {
                    return join([
                        Button::edit('boilerplate.edit-portfolio', $portfolio->id),    
                        Button::delete('boilerplate.delete-portfolio', $portfolio->id),           
                    ]);
                    
                })
        ];
    }
}