<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\cart;
use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\DB;
use Session;

class CartController extends Controller
{
    public function add_to_cart(Request $request,$id){     
         $product = DB::table('tb_product')
         ->where('id',$id)
         ->first();
         if($product != null){      
             $cartO = Session('cart') ? Session('cart') : null;
             $newCart = new cart($cartO);
             $newCart->addCart($product,$id);
             $request->session()->put('cart',$newCart);         
         }
         return view('cart');
    }
    public function DeleteItem(Request $request,$id){      
        $cartO = Session('cart') ? Session('cart') : null;
        $newCart= new cart($cartO);
        $newCart->DeleteItem($id);
        if(count( $newCart->products)>0)
         {
            $request->session()->put('cart',$newCart);   
         }else{
            $request->session()->forget('cart');   
         }
        return view('cart');
   }
   public function list_cart(){
      return view('list-cart');
   }
   public function DeleteItemlist(Request $request,$id){
      $cartO = Session('cart') ? Session('cart') : null;
      $newCart= new cart($cartO);
      $newCart->DeleteItem($id);
      if(count( $newCart->products)>0)
       {
          $request->session()->put('cart',$newCart);   
       }else{
          $request->session()->forget('cart');   
       }
       return view('list-cart-cut');
   
   }
   public function save_cart(Request $request,$id,$quanty){
         $cartO = Session('cart') ? Session('cart') : null;
         $newCart= new cart($cartO);
         $newCart->updateCart($id,$quanty);
         $request->session()->put('cart',$newCart);  
         return view('list-cart-cut');
   }
}
