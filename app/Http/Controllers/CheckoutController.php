<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\cart;
use App\Models\customer;
use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\DB;
use Session;

class CheckoutController extends Controller
{
    public function index(){
        return view('login_checkout');
    }
    public function add_customer(Request $request){
        $data= array();
        if($request->has('customer_img')){
        $customer_img = $request->customer_img;
        
        $file_img_customer = $customer_img->getClientOriginalName();
        $customer_img->move(base_path('public/upload/product'),$file_img_customer);
        
        }
      
       $data['customer_name'] = $request->customer_name;
       $data['customer_email'] = $request->customer_email;
       $data['customer_password'] = md5($request->customer_password);
       $data['customer_phone'] = $request->customer_phone;
       $data['customer_img'] = $file_img_customer;
       $customer_id = DB::table('customer')->insertGetId($data);
       Session::put('customer_id',$customer_id);
       Session::put('customer_name',$request->customer_name);
       Session::put('customer_email',$request->customer_email);
       Session::put('customer_phone',$request->customer_phone);
       Session::put('customer_img',$file_img_customer);
       return Redirect('/checkout'); 
    }
    public function checkout(){
       return view('checkout');
    }
    public function save_checkout(Request $request){
        $data= array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_address'] = $request->shipping_address;
        $shipping_id = DB::table('shipping')->insertGetId($data);
        Session::put('shipping_id',$shipping_id);
       // Session::put('customer_name',$request->customer_name);
        return Redirect('/payment');
    }
    public function payment(){
        return view('payment');
    }
    public function logout(){
        Session::forget('customer_id');
        Session::forget('customer_img');
        Session::forget('customer_email');
        Session::forget('customer_name');
        Session::forget('customer_phone');
        Session::forget('shipping_id');
        return Redirect('login-checkout')->withSuccess('Đăng xuất thành công');
    }
    public function login_account(Request $request){
        $email = $request->email_account;
        $password = md5($request->password_account);
        
        $result = DB::table('customer')
        ->where('customer_email','=',$email)
        ->where('customer_password','=',$password)
        ->first();        
        if($result){
            Session::put('customer_id',$result->customer_id);
            Session::put('customer_img',$result->customer_img);
            Session::put('customer_email',$result->customer_email);
            Session::put('customer_phone',$result->customer_phone);
            Session::put('customer_name',$result->customer_name);
            return Redirect('/checkout');
          
        }else{
            return Redirect('/login-checkout');
        }
       
      
        

    }
}
