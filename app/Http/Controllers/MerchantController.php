<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCate;
use App\Product;
use App\Menu;
use App\User;
use App\System;
use App\Order;
use App\OrderDetail;
use App\Feedback;
use App\Http\Requests\addProductRequest;
use App\Http\Requests\editProductRequest;
use App\Http\Requests\editPasswordRequest;
use App\Http\Requests\editInfoRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

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
        $categories = ProductCate::where('display',1)->whereNull('parent_id')->get();
        $menus = Menu::whereNull('parent_id')->orderBy('stt','ASC')->get();
        $system = System::where('id',1)->get()->first();
        $products = Product::where('user_id',Auth::user()->id)->get();
    	return view('front-end.shop',compact('categories','products','menus','system'));
    }
    public function info(){
        $categories = ProductCate::where('display',1)->whereNull('parent_id')->get();
        $menus = Menu::whereNull('parent_id')->orderBy('stt','ASC')->get();
        $system = System::where('id',1)->get()->first();
        return view('front-end.info',compact('categories','menus','system'));
    }
    public function editPassword(){
        $categories = ProductCate::where('display',1)->whereNull('parent_id')->get();
        $menus = Menu::whereNull('parent_id')->orderBy('stt','ASC')->get();
        $system = System::where('id',1)->get()->first();
        return view('front-end.edit-password',compact('categories','menus','system'));
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
        $categories = ProductCate::where('display',1)->whereNull('parent_id')->get();
        $menus = Menu::whereNull('parent_id')->orderBy('stt','ASC')->get();
        $system = System::where('id',1)->get()->first();
        $product = Product::where('id',$id)->get()->first();
        if($product->user_id == Auth::user()->id){
            return view('front-end.editProduct',compact('categories','product','menus','system'));
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
    public function salesOrder(){
        $categories = ProductCate::where('display',1)->whereNull('parent_id')->get();
        $menus = Menu::whereNull('parent_id')->orderBy('stt','ASC')->get();
        $system = System::where('id',1)->get()->first();
        $products = Product::where('user_id',Auth::user()->id)->get();
        $prs_id = Controller::arrayColumn($products,$col='id');
        
        $orders_detail = OrderDetail::whereIn('products_id',$prs_id)->get();
        $orders_id = Controller::arrayColumn($orders_detail,$col='orders_id');
        $orders = Order::whereIn('id',$orders_id)->get();
        return view('front-end.s_order',compact('categories','menus','system','orders','orders_detail'));
    }
    public function purchaseOrder(){
        $categories = ProductCate::where('display',1)->whereNull('parent_id')->get();
        $menus = Menu::whereNull('parent_id')->orderBy('stt','ASC')->get();
        $system = System::where('id',1)->get()->first();
        $orders = Order::where('phone',Auth::user()->phone)->get();
        $orders_id = Controller::arrayColumn($orders,$col='id');
        $orders_detail = OrderDetail::whereIn('orders_id',$orders_id)->get();
        return view('front-end.p_order',compact('categories','menus','system','orders','orders_detail'));
    }
    public function removeOrder($id){
        $order = Order::where('id',$id)->first();
        if(Auth::user()->phone == $order->phone){
            $order->delete();
            return redirect()->route('PO')->with(['flash_level'=>'success','flash_message'=>'Xóa đơn hàng thành công']);
        }
        else{
            return redirect()->route('PO')->with(['flash_level'=>'danger','flash_message'=>'Xóa đơn hàng không thành công']);
        }
    }

    // Feedback
    public static function checkCreateFeedback($product_id){

        $feedback = Feedback::where('user_id',Auth::user()->id)->where('product_id',$product_id)->get();
        $orders_detail = OrderDetail::join('orders', 'order_details.orders_id', '=', 'orders.id')->where('order_details.products_id',$product_id)->where('orders.phone',Auth::user()->phone)->select('order_details.*', 'orders.phone AS phone')->get();
        if(count($feedback) ==0 && count($orders_detail) != 0){
            return true;
        }
        else{
            return false;
        }
    }
    public function postAddFeedback($product_id, Request $request){
        $feedback = new Feedback;
        $feedback ->add($product_id,$request);
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Đánh giá sản phẩm thành công']);

    }
    // End feedback
}
