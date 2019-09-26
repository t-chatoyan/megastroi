<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkPrice extends Model
{
    protected $table = 'work_prices';

    protected $fillable = [
        'work_id' , 'name' , 'price'
    ];

    public function work()
    {
        return $this->hasMany('App\work', 'id', 'work_id');
    }
}
