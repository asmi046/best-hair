<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'section',
        'subsection',
        'description',
        'positions',
    ];

    protected $casts = [
        'positions' => 'array',
    ];
}
