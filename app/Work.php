<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = 'works';

    protected $fillable = [
        'name'
    ];

    public function workPrice()
    {
        return $this->hasMany('App\WorkPrice', 'work_id' , 'id');
    }
}
