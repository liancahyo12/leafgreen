<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function User()
    {  
        return $this- belongsTo(User::class);
    }

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'post_date',
        'category',
        'tumbnail',
        'tag',
        'content',
        'post_status',
    ];  

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
