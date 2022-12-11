<?php

namespace App\Datatables;

use Sebastienheyd\Boilerplate\Datatables\Button;
use Sebastienheyd\Boilerplate\Datatables\Column;
use Sebastienheyd\Boilerplate\Datatables\Datatable;
use App\Models\certification;

class CertificateDatatable extends Datatable
{
    public $slug = 'certificate';

    public function datasource()
    {
        return certification::where('status', 1)->get([
            'id',
            'nama',
            'description',
            'logo',
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

            Column::add('Logo')
            ->data('logo', function (certification $certification) {
                $badge1 = '<a target="_blank" href="'.$certification->logo.'"><img src="'.$certification->logo.'" class="img-fluid mb-2" alt="logo" height=10 width=30>
                </a>';
                return join([$badge1]);
            }),
                
            Column::add('Aksi')
                ->actions(function(certification $certification) {
                    return join([
                        Button::edit('boilerplate.edit-certification', $certification->id),    
                        Button::delete('boilerplate.delete-certification', $certification->id),           
                    ]);
                    
                })
        ];
    }
}