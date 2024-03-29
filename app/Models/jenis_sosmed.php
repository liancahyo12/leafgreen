<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sosial_media;

class jenis_sosmed extends Model
{
    use HasFactory;

    public function sosial_media()
    {
        return $this->hasMany(sosial_media::class);
    }

    protected $fillable = [
        'jenis_sosmed',
        'logo',
    ];  
}
