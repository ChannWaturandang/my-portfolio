<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'logo',
        'institution',
        'degree',
        'major',
        'start_date',
        'end_date',
        'description'
    ];
}
