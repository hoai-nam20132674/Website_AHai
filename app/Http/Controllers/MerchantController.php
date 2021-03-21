<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCate;
use App\Product;
use App\Http\Requests\addProductRequest;
use App\Http\Requests\editProductRequest;
use Illuminate\Support\Facades\Auth;

class MerchantController extends Controller
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
    public function index(){
    	$categories = ProductCate::select()->get();
        $products = Product::where('user_id',Auth::user()->id)->get();
    	return view('front-end.shop',compact('categories','products'));
    }
    public function postAddProduct(addProductRequest $request){
        $item = new Product;
        $item -> add($request);
        return redirect()->route('merchantIndex')->with(['flash_level'=>'success','flash_message'=>'Đăng sản phẩm thành công']); 
    }
    public function editProduct($id){
        $categories = ProductCate::select()->get();
        $product = Product::where('id',$id)->get()->first();
        if($product->user_id == Auth::user()->id){
            return view('front-end.editProduct',compact('categories','product'));
        }
        else{
            return redirect()->route('index')->with(['flash_level'=>'danger','flash_message'=>'Yêu cầu không được xử lý']);
        }
    }
    public function postEditProduct(editProductRequest $request, $id){
        $item = new Product;
        $item->edit($request,$id);
        return redirect()->route('merchantIndex')->with(['flash_level'=>'success','flash_message'=>'Sửa sản phẩm thành công']);
    }
}
