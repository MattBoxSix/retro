<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    public $pp = 1.99;

    public function __construct($oldCart){
      if ($oldCart){
        $this->items = $oldCart->items;
        $this->totalQty = $oldCart->totalQty;
        $this->totalPrice = $oldCart->totalPrice;
      }
    }
    public function contains($id){
      return ($this->items) && array_key_exists($id, $this->items);
    }

    public function add($item, $id){
      $storedItem = ['qty' =>0, 'price' => $item->price, 'item' => $item, 'id' => $id];
      if ($this->items) {
        if (array_key_exists($id, $this->items)) {
          $storedItem = $this->items[$id];
        }
      }else{
        $this->items = array();
      }
      $storedItem['price'] = $item->price;
      if (!array_key_exists($id, $this->items)){
        $storedItem['qty']++;
        $this->totalQty++;
        $this->totalPrice+=$item->price;
        $this->items[$id] = $storedItem;
      }
    }

    public function removeItem($id){
      $this->totalQty -= $this->items[$id]['qty'];
      $this->totalPrice -= $this->items[$id]['price'];
      unset($this->items[$id]);
    }
}
