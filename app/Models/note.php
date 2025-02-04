<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    protected $casts = [
        'content' => 'array'
    ];
}
