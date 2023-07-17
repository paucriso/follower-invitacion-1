<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'pases', 'codigo', 'confirmado'];
    protected $casts = [
        'pases' => 'integer'
    ];
}
