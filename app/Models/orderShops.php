<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class otherShops extends Model
{

    protected $table='otherShops';
    protected $fillable = ['id','shop','orderlist','customer_id','created_at','updated_at'];


}
