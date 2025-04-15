<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Achievements extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'company', 'publication_date', 'expiration_date', 'credential_url', 'image'];

    protected $casts = [
        'publication_date' => 'date',
    ];

    public function scopeTitle(Builder $query, string $title): Builder
    {
        return $query->where('title', 'LIKE', '%'. $title. '%');
    }
}
