<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dmdiaban extends Model
{
    protected $table = 'dmdiaban';
    protected $fillable = [
        'id',
        'madiaban',
        'tendiaban',
        'capdo',
        'magoc',
        'stt',
        'ghichu',
    ];
}
