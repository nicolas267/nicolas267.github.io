<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ordersModel extends Model
{
    protected $table = 'orders';

    protected $fillable = ['order_id','user_id','subtotal','tax','total','status'];
    public function Orders_products()
    {
        return $this->hasMany('App\models\Orders_products');
    }
}
