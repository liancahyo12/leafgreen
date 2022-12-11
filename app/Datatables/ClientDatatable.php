<?php

namespace App\Datatables;

use Sebastienheyd\Boilerplate\Datatables\Button;
use Sebastienheyd\Boilerplate\Datatables\Column;
use Sebastienheyd\Boilerplate\Datatables\Datatable;
use App\Models\client;

class ClientDatatable extends Datatable
{
    public $slug = 'client';

    public function datasource()
    {
        return client::where('status', 1)->get([
            'id',
            'nama',
            'logo',
            'status',]
        );
    }

    public function setUp()
    {
        $this->noSearching();
        $this->noPaging();
    }

    public function columns(): array
    {
        return [
            Column::add('ID')
                ->data('id'),
                
            Column::add('Nama')
                ->data('nama'),

                Column::add('Logo')
                ->data('logo', function (client $client) {
                    $badge1 = '<a target="_blank" href="'.$client->logo.'"><img src="'.$client->logo.'" class="img-fluid mb-2" alt="logo" height=10 width=30>
                    </a>';
                    return join([$badge1]);
                }),

            Column::add('Aksi')
                ->actions(function(client $client) {
                    return join([
                        Button::edit('boilerplate.edit-client', $client->id),    
                        Button::delete('boilerplate.delete-client', $client->id),           
                    ]);
                    
                })
        ];
    }
}