<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'github',
        'link_demo',
        'start_date',
        'end_date',

    ];

    protected $casts = [
        'tech' => 'array',
    ];
}
