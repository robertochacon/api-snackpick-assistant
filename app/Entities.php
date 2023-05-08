<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entities extends Model
{
    protected $table = 'entities';

    protected $fillable = [
        'user_id','name', 'description','status','logo','address','phone','ws','longitud','latitud',
    ];
}
