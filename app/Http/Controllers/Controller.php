<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Requests\addUserRequest;
use App\Http\Controllers\Auth\LoginController;
use App\User;
use App\BlogCate;
use App\Blog;
use App\Service;
use App\ServiceCate;
use App\Product;
use App\ProductCate;
use App\ProductImage;
use App\System;
use App\Menu;
use App\BCID;
use App\PCID;
use App\SCID;
use App\Contact;
use App\Card;
use App\Slider;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $categories = ProductCate::where('display',1)->whereNull('parent_id')->get();
        $sliders = Slider::where('display',1)->orderBy('stt','ASC')->get();
        $menus = Menu::whereNull('parent_id')->orderBy('stt','ASC')->get();
        $best_sale = Product::where('display',1)->where('best_sale',1)->orderBy('updated_at','DESC')->get();
        $product_new = Product::where('display',1)->orderBy('id','DESC')->get();
        $product_hot = Product::where('display',1)->where('hot',1)->orderBy('updated_at','DESC')->get();
        $products = Product::where('display',1)->orderBy('id','DESC')->get();
        return view('front-end.index',compact('sliders','categories','menus','best_sale','product_new','product_hot','products'));



    }
    public function postAddUserMerchant(addUserRequest $request){
        $item = new User;
        $item -> addMerchant($request);
        if($item-> addMerchant($request)){
            $login = new LoginController;
            $login->postLogin($request);
            return redirect()->route('index')->with(['flash_level'=>'success','flash_message'=>'Tạo tài khoản và đăng nhập thành công']);
        }
        else{
            return redirect()->route('index')->with(['flash_level'=>'danger','flash_message'=>'Tạo tài khoản không thành công']);
        }

    }

    public function page($url, Request $request){

        $strrpos = strrpos($url,"-");
        $url = substr($url,$strrpos+1);
        $key = substr($url,0,2);
        $id = substr($url,2);
        
        $categories = ProductCate::where('display',1)->whereNull('parent_id')->get();
        $menus = Menu::whereNull('parent_id')->orderBy('stt','ASC')->get();

    	if($key=='pi'){
            $product = Product::where('id',$id)->get()->first();
            $cates = PCID::where('product_id',$id)->get();
            $same_cate_id = $this->arrayColumn($cates,$col='cate_id');
            $same_products_id = $this->arrayColumn(PCID::where('product_id','!=',$id)->whereIn('cate_id',$same_cate_id)->take(10)->get(),$col='product_id');
            $same_products = Product::whereIn('id',$same_products_id)->where('display',1)->orderBy('id','DESC')->take(5)->get();
            $recommend_products = Product::whereIn('id',$same_products_id)->where('display',1)->orderBy('id','DESC')->skip(1)->take(10)->get();
            $images = ProductImage::where('product_id',$product->id)->where('role',0)->get();
            return view('front-end.product',compact('categories','menus','product','images','same_products','recommend_products'));
    		
    	}
        
        else if($key=='pc'){

            $sliders = Slider::where('display',1)->orderBy('stt','ASC')->get();
            $categorie = ProductCate::where('id',$id)->get()->first();
            $pcids = PCID::where('cate_id',$id)->get();
            $pids = $this->arrayColumn($pcids,$col='product_id');
            if($request->price ==''){
                $products = Product::whereIn('id',$pids)->where('display',1)->orderBy('id','DESC')->paginate(30);
            }
            else{
                $products = Product::whereIn('id',$pids)->where('display',1)->orderBy('price',$request->price)->paginate(30);
            }
            return view('front-end.products',compact('categories','menus','products','categorie','sliders','request'));
        }
        // else if($key=='bi'){
        //     $blog = Blog::where('id',$id)->get()->first();
        //     $blogs = Blog::where('id','!=',$blog->id)->take(6)->get();
        //     return view('front-end.blog',['system'=>$system,'blogs'=>$blogs,'blog'=>$blog]);
        // }
        
        else if($key=='bc'){
            $blog_cate = $blog_cate->first();
            $bcids = BCID::where('cate_id',$blog_cate->id)->get();
            $bids = $this->arrayColumn($bcids,$col='blog_id');
            $blogs = Blog::whereIn('id',$bids)->get();
            return view('front-end.blogs',['system'=>$system,'blog_cate'=>$blog_cate,'blogs'=>$blogs]);
        }
        if($key=='si'){
            $user = User::where('id',$id)->get()->first();
            $products = Product::where('user_id',$id)->where('display',1)->get();
            return view('front-end.gian-hang',compact('categories','menus','products','user'));
            
        }
        else {
            return view('front-end.error',['system'=>$system]);
        }


    }
    public function search(Request $request){
        $sliders = Slider::where('display',1)->orderBy('stt','ASC')->get();
        $categories = ProductCate::where('display',1)->whereNull('parent_id')->get();
        $menus = Menu::whereNull('parent_id')->orderBy('stt','ASC')->get();
        $products = Product::where('name', 'like', '%' .$request->keyword.'%')->paginate(30);
        return view('front-end.product-search',compact('categories','menus','products','sliders','request'));
    }

    // ------------------------------------------
    public static function arrayColumn($object,$col){
        $array = array();
        $i = 0;
        foreach($object as $cate){
            $array[$i] = $cate->$col;
            $i++;
        }
        return $array;
    }
    // ------------------------------------------
    public function addContact(Request $request){
        $item = new Contact;
        $item->add($request);
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'1']);

    }
    public function contact(){
        $system = System::where('id',1)->get()->first();
        return view('front-end.contact',['system'=>$system]);
    }
}
