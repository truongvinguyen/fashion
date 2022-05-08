<?php
 namespace App\Models;


 class cart{
     public $products = null;
     public $totalPrice = 0;
     public $totalQty = 0;

     public function __construct($cart){
         if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQty = $cart->totalQty;
         }
     }

     public function addCart($product,$id){
         $newProduct = ['quanty'=>0,'price'=>$product->product_price,'productInfo'=>$product];
         if($this->products){
           if(array_key_exists($id,$this->products)){
             $newProduct = $this->products[$id];
           }
         
         }
         $newProduct['quanty']++;
         $newProduct['price']= $newProduct['quanty']*$product->product_price;
         $this->products[$id] = $newProduct;
         $this->totalPrice +=$product->product_price;
         $this->totalQty++;
        
     }
     public function DeleteItem($id){
         $this->totalQty -= $this->products[$id]['quanty'];
         $this->totalPrice -= $this->products[$id]['price'];
         unset($this->products[$id]);



     }
     //$this->products[$id]['quanty'] = $quanty;
     //$this->products[$id]['price'] = $quanty * $this->products[$id]['productInfo']->product_price;

     //$this->totalQty += $this->products[$id]['quanty'];
     //$this->totalPrice += $this->products[$id]['price'];
     public function updateCart($id,$quanty){
         $this->totalQty -= $this->products[$id]['quanty'];
         $this->totalPrice -= $this->products[$id]['price'];

        $this->products[$id]['quanty'] = $quanty;
        $this->products[$id]['price'] = $quanty * $this->products[$id]['productInfo']->product_price;

        $this->totalQty += $this->products[$id]['quanty'];
        $this->totalPrice += $this->products[$id]['price'];
     }

 }
?>
        