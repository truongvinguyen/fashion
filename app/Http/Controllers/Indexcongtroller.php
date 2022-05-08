<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Redirect;
use App\Models\product;
use App\Models\category;

class Indexcongtroller extends Controller
{
    public function index(){
        
        $product_all = product::all()
        ;
        $product_aothun= product::where('id_category','=', 2)
        ->get();

        $product_quandai= product::where('id_category','=', 3)
        ->get();

        $product_aokhoac= product::where('id_category','=', 6)
        ->get();
        $product_somi= product::where('id_category','=', 1)
        ->get();
        $product_phukien= product::where('id_category','=', 5)
        ->get();
        $category = category::all();

        return view('welcome',compact('product_phukien','product_somi','category','product_all','product_aothun','product_quandai','product_aokhoac'));
        
    }
}
