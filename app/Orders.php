<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'user_id','entity_id','services','table','total','amount','note','time','window','status',
    ];

}
