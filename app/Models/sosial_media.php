<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\jenis_sosmed;

class sosial_media extends Model
{
    use HasFactory;

    public function jenis_sosmed()
    {  
        return $this- belongsTo(jenis_sosmed::class);
    }

    protected $fillable = [
        'jenis_sosmed_id',
        'url',
    ];
}
