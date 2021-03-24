<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCate;
use App\Product;
use App\Menu;
use App\User;
use App\Http\Requests\addProductRequest;
use App\Http\Requests\editProductRequest;
use App\Http\Requests\editPasswordRequest;
use App\Http\Requests\editInfoRequest;
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
        $menus = Menu::whereNull('parent_id')->orderBy('stt','ASC')->get();
    	return view('front-end.shop',compact('categories','products','menus'));
    }
    public function info(){
        $categories = ProductCate::select()->get();
        $menus = Menu::whereNull('parent_id')->orderBy('stt','ASC')->get();
        return view('front-end.info',compact('categories','menus'));
    }
    public function editPassword(){
        $categories = ProductCate::select()->get();
        $menus = Menu::whereNull('parent_id')->orderBy('stt','ASC')->get();
        return view('front-end.edit-password',compact('categories','menus'));
    }
    public function postEditPassword(editPasswordRequest $request){
        $item = new User;
        $check = $item->merchantEditPassword($request);
        if($check){
            return redirect()->route('merchantEditPassword')->with(['flash_level'=>'success','flash_message'=>'Thay đổi mật khẩu thành công']);
        }
        else{
            return redirect()->route('merchantEditPassword')->with(['flash_level'=>'danger','flash_message'=>'Đổi mật khẩu không thành công. Mật khẩu không chính xác']);
        }
        
    }
    public function postEditInfo(editInfoRequest $request){
        $item = new User;
        $item -> merchantEditInfo($request);
        return redirect()->route('merchantInfo')->with(['flash_level'=>'success','flash_message'=>'Cập nhật thông tin thành công']); 
    }
    public function postAddProduct(addProductRequest $request){
        $item = new Product;
        $item -> add($request);
        return redirect()->route('merchantIndex')->with(['flash_level'=>'success','flash_message'=>'Đăng sản phẩm thành công']); 
    }
    public function editProduct($id){
        $categories = ProductCate::select()->get();
        $product = Product::where('id',$id)->get()->first();
        $menus = Menu::whereNull('parent_id')->orderBy('stt','ASC')->get();
        if($product->user_id == Auth::user()->id){
            return view('front-end.editProduct',compact('categories','product','menus'));
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
