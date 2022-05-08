<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Redirect;
use App\Models\product;
use App\Models\category;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    //Hiện tất cả sản phẩm và chức năng tìm kiếm
    public function allproduct(){
            //tất cả danh mục
            $category = category::all();
            //tất cả sản phẩm
            $querypd = DB::table('tb_product')
            ->join('tb_category','id_category' , '=' , 'id_cat')
            ->select('tb_product.id' , 'tb_product.product_name' , 'tb_product.product_price' , 'tb_product.product_image' , 'tb_product.id_category','tb_product.product_content','tb_product.status',
            'tb_category.name_cat','tb_category.id_cat')
            ->orderBy('tb_product.id' , 'desc');
            $data = $querypd->paginate(5);

            if($key = request()->key){
                $querypd = DB::table('tb_product')
                ->join('tb_category','id_category' , '=' , 'id_cat')
                ->select('tb_product.id' , 'tb_product.product_name' , 'tb_product.product_price' , 'tb_product.product_image' , 'tb_product.id_category','tb_product.product_content','tb_product.status',
                'tb_category.name_cat','tb_category.id_cat')
                ->where('tb_product.product_name','like','%'.$key.'%');
                $data = $querypd->paginate(5);
            }

            if($fill_cat = request()->fill_cat){
                $querypd = DB::table('tb_product')
                ->join('tb_category','id_category' , '=' , 'id_cat')
                ->select('tb_product.id' , 'tb_product.product_name' , 'tb_product.product_price' , 'tb_product.product_image' , 'tb_product.id_category','tb_product.product_content','tb_product.status',
                'tb_category.name_cat','tb_category.id_cat')
                ->where('id_cat','=',$fill_cat);
                $data = $querypd->paginate(5);
            }
            return view('admin.allproduct', ['data'=>$data])->with('i',(request()->input('page',1)-1)*5)->with(compact('category'));
    }


    //thêm sản phẩm bằng Models
    public function addproduct(){
            $query_cat = DB::table('tb_category')
            ->select('id_cat','name_cat');
            $all_cat = $query_cat->get();
            return view('admin.addproduct',['all_cat'=>$all_cat]);
    }


    public function saveproduct(Request $request){
            $request->validate([
                'name_product'=>'required',
                'price_product'=>'required',
                'cat_product'=>'required',
                'content_product'=>'required',
                'status_product'=>'required',
                'img_product'=>'required',
            ],[
               'name_product.required'=>'Tến sản phẩm không được bỏ trống', 
               'price_product.required'=>'GIÁ sản phẩm không được bỏ trống', 
               'cat_product.required'=>'Loại sản phẩm không được bỏ trống', 
               'content_product.required'=>'Mô tả sản phẩm không được bỏ trống', 
               'status_product.required'=>'Trạng sản phẩm không được bỏ trống', 
               'img_product.required'=>'Hình ảnh sản phẩm không được bỏ trống', 
            ]);
          
            if($request->has('img_product')){
                $img_product = $request->img_product;
                $file_name = $img_product->getClientOriginalName();
                $img_product->move(base_path('public/upload/product'),$file_name);
            }
            product::create([
                    'product_name' => $request->name_product,
                    'product_price'=> $request->price_product,
                    'product_image'=>$file_name,
                    'id_category'=>$request->cat_product,
                    'product_content'=>$request->content_product,
                    'status'=>$request->status_product            
            ]);
        return redirect('/admin/product')->withSuccess('Thêm sản phẩm thành công');
    }


    public function editproduct($id){
            $query_cat = DB::table('tb_category')
            ->select('id_cat','name_cat');
            $all_cat = $query_cat->get();     
            $querypd = DB::table('tb_product')
            ->where('id','=',$id);
            $product = $querypd->get();
            $product=product::find($id);
            return view('admin.editproduct',['all_cat'=>$all_cat],compact('product'));
    }


    public function saveproductsave(Request $request,$id){ 
        $product=product::find($id);
        if($request->has('img_product')){
            $img_product = $request->img_product;
            $file_name = $img_product->getClientOriginalName();
            $img_product->move(base_path('public/upload/product'),$file_name);
        }
        else{
            $file_name = $product->product_image;
        }  
          product::find($id)->update([
            'product_name' => $request->name_product,
            'product_price'=> $request->price_product,
            'product_image'=>$file_name,
            'id_category'=>$request->cat_product,
            'product_content'=>$request->content_product,
            'status'=>$request->status_product
          ]);
          return redirect('/admin/product')->withSuccess('Sửa thành công');
    }


    public function deleteproduct($id){
          product::find($id)->delete();
          return redirect('/admin/product')->withSuccess('Xóa thành công');
    }



   public function allcat(){
          $data = category::all();
          return view('admin.allcat',compact('data'));
   } 

   public function addcat(){
         return view('admin.addcat');
   }


   public function saveCat(Request $request){
                if($request->has('img_category')){
                    $img_category = $request->img_category;
                    $file_name = $img_category->getClientOriginalName();
                    $img_category->move(base_path('public/upload/category'),$file_name);
                }
                category::create([
                        'name_cat' => $request->name_category,                     
                        'cat_image'=>$file_name
                                
                ]);
            return redirect('/admin/category')->withSuccess('Thêm danh mục thành công');
   }


  
}
//chất liệu 100% coton lạnh