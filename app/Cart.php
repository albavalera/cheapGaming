<?php

namespace App;

class Cart{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    
    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }

    }
    public function add($item,$id) {
        $storedItem = ['qty' => 0 , 'price'=>$item->Precio, 'item'=>$item];
        
        if($this->items){
            if(array_key_exists($id, $this->items)){
                     $storedItem = $this->items[$id];
            }

        }

        $storedItem['qty']++;
        $storedItem['price'] = $item->Precio * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->Precio;
    }
    
     /*public function removeGame($item,$id) {
        $storedItem = ['qty' => $item["qty"],'price' => $item["price"]];
        $precio = $storedItem['price'] / $storedItem['qty'];
     
        $storedItem['price'] = $storedItem['price']  - $precio ;
        $this->items[$id] = $storedItem;
        $this->totalQty = $this->totalQty - $storedItem['qty'];
      //  $this->totalPrice = $this->totalPrice - $storedItem['Precio'];
    }*/
    
    
 }
