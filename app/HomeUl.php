<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeUl extends Model
{
    protected $table = 'home_ul';

    protected $fillable = [
        'left_name', 'right_name'
    ];
}
