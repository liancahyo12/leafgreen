<?php

namespace App\Datatables;

use Sebastienheyd\Boilerplate\Datatables\Button;
use Sebastienheyd\Boilerplate\Datatables\Column;
use Sebastienheyd\Boilerplate\Datatables\Datatable;
use App\Models\sosial_media;

class SocialDatatable extends Datatable
{
    public $slug = 'social';

    public function datasource()
    {
        return sosial_media::leftJoin('jenis_sosmeds', 'jenis_sosmeds.id', 'sosial_media.jenis_sosmed_id')->where('sosial_media.status', 1)->get([
            'sosial_media.id',
            'jenis_sosmeds.jenis_sosmed',
            'nama',
            'url',
            'comment',
            'sosial_media.status',]
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
                
            Column::add('Jenis Sosmed')
                ->data('jenis_sosmed'),

            Column::add('Url')
                ->data('url'),

            Column::add('Aksi')
                ->actions(function(sosial_media $sosial_media) {
                    return join([
                        Button::edit('boilerplate.edit-social', $sosial_media->id),    
                        Button::delete('boilerplate.delete-social', $sosial_media->id),           
                    ]);
                    
                })

        ];
    }
}