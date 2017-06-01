<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dmkhoipb extends Model
{
    protected $table = 'dmkhoipb';
    protected $fillable = [
        'id',
        'makhoipb',
        'tenkhoipb',
        'ghichu'
    ];
}
