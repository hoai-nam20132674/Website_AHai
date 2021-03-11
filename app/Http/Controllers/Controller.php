<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
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

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        
        return view('front-end.index');
    }

    public function page($url){
    	$blog_cate = BlogCate::where('url',$url)->get();
    	$service_cate = ServiceCate::where('url',$url)->get();
    	$product_cate = ProductCate::where('url',$url)->get();
    	$blog = Blog::where('url',$url)->get();
    	$service = Service::where('url',$url)->get();
    	$product = Product::where('url',$url)->get();
    	$system = System::where('id',1)->get()->first();

    	if(!$blog_cate->isEmpty()){
    		$blog_cate = $blog_cate->first();
    		$bcids = BCID::where('cate_id',$blog_cate->id)->get();
    		$bids = $this->arrayColumn($bcids,$col='blog_id');
    		$blogs = Blog::whereIn('id',$bids)->get();
    		return view('front-end.blogs',['system'=>$system,'blog_cate'=>$blog_cate,'blogs'=>$blogs]);
    	}
        else if(!$service_cate->isEmpty()){
            $service_cate = $service_cate->first();
            $scids = SCID::where('cate_id',$service_cate->id)->get();
            $sids = $this->arrayColumn($scids,$col='service_id');
            $services = Service::whereIn('id',$sids)->get();
            return view('front-end.services',['system'=>$system,'service_cate'=>$service_cate,'services'=>$services]);
        }
        else if(!$product_cate->isEmpty()){
            $product_cate = $product_cate->first();
            $pcids = PCID::where('cate_id',$product_cate->id)->get();
            $pids = $this->arrayColumn($pcids,$col='product_id');
            $products = Product::whereIn('id',$pids)->get();
            return view('front-end.products',['system'=>$system,'product_cate'=>$product_cate,'products'=>$products]);
        }
        else if(!$blog->isEmpty()){
            $blog = $blog->first();
            $blogs = Blog::where('id','!=',$blog->id)->take(6)->get();
            return view('front-end.blog',['system'=>$system,'blogs'=>$blogs,'blog'=>$blog]);
        }
        else if(!$service->isEmpty()){
            $service = $service->first();
            $services = Service::where('id','!=',$service->id)->take(6)->get();
            return view('front-end.service',['system'=>$system,'services'=>$services,'service'=>$service]);
        }
        else if(!$product->isEmpty()){
            $product = $product->first();
            $products = Product::where('id','!=',$product->id)->take(6)->get();
            $images = ProductImage::where('product_id',$product->id)->where('role',0)->get();
            return view('front-end.product',['system'=>$system,'products'=>$products,'product'=>$product,'images'=>$images]);
        }
        else {
            return view('front-end.error',['system'=>$system]);
        }


    }
    public function cardSearch(Request $request){
        $system = System::where('id',1)->get()->first();
        $items = Card::where('code', 'like', '%' .$request->card.'%')->get();
        return view('front-end.card-search',['system'=>$system,'items'=>$items]);
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
