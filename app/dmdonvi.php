<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dmdonvi extends Model
{
    protected $table = 'dmdonvi';
    protected $fillable = [
        'id',
        'madiaban',
        'madv',
        'tendv',
        'diachi',
        'sodt',
        'lanhdao',
        'songuoi',
        'macqcq',
        'diadanh',
        'cdlanhdao',
        'nguoilapbieu',
        'makhoipb',
        'capdo',
        'madvbc'
    ];
}
