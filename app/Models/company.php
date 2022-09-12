<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'logo',
        'alamat',
        'email',
        'no_telp',
        'no_hp',
        'bplant',
        'tmixer',
        'cpump',
        'wloader',
    ];  
}
