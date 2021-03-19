<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCate;

class MerchantController extends Controller
{
    
    public function index(){
    	$categories = ProductCate::select()->get();
    	return view('front-end.shop',compact('categories'));
    }
}
