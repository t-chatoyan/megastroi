<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homedata extends Model
{
    protected $table = 'home_data';

    protected $fillable = [
        'name', 'description'
    ];
}
