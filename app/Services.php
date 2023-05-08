<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{

    protected $table = 'services';

    protected $fillable = [
        'user_id','entity_id','code','name', 'description','price','amount','photo','status',
    ];

}
