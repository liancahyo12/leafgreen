<?php

namespace App\Datatables;

use Sebastienheyd\Boilerplate\Datatables\Button;
use Sebastienheyd\Boilerplate\Datatables\Column;
use Sebastienheyd\Boilerplate\Datatables\Datatable;
use App\Models\award;

class AwardDatatable extends Datatable
{
    public $slug = 'award';

    public function datasource()
    {
        return award::where('status', 1)->get([
            'id',
            'nama',
            'description',
            'file',
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
                
            Column::add('Nama')
                ->data('nama'),

            Column::add('Deskripsi')
                ->data('description'),

            Column::add('File')
            ->data('file', function (award $award) {
                $badge1 = '<a target="_blank" href="'.$award->file.'"><p>"'.$award->nama.'"</p></a>';
                return join([$badge1]);
            }),

            Column::add('Aksi')
                ->actions(function(award $award) {
                    return join([
                        Button::edit('boilerplate.edit-award', $award->id),    
                        Button::delete('boilerplate.delete-award', $award->id),           
                    ]);
                    
                })
        ];
    }
}