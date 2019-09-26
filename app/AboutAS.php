<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutAS extends Model
{
    protected $table = 'about_as';

    protected $fillable = [
        'text'
    ];
}
