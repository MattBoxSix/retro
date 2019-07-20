<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    public function order(){
      return $this->belongsTo('App\Order', 'order_id');
    }
    public function game(){
      return $this->belongsTo('App\Game', 'game_id');
    }
}
