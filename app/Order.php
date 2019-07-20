<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }

    protected $fillable = [
      'cart',
      'total',
      'processed',
      'payment_id',
      'user_id',
      'addressLine1',
      'addressLine2',
      'city',
      'county',
      'postcode',
    ];
}
