<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function category()
      {
        return $this->belongsTo('App\Category', 'category_id');
      }

      protected $fillable = [
        'title',
        'image',
        'score',
        'description',
        'price',
        'category_id',
        'sold',
        'promote'
      ];
}
