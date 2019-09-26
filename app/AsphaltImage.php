<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsphaltImage extends Model
{
    protected $table = 'asphalt_images';

    protected $fillable = [
        'name', 'img',
    ];

}
