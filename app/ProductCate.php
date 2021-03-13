<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCate extends Model
{
    //
    protected $table = 'product_cates';
    public function add($request){
    	$this->name = $request->name;
    	$this->title = $request->title;
    	$this->seo_keyword = $request->seo_keyword;
    	$this->seo_description = $request->seo_description;
    	$this->url = $request->url;
    	$this->parent_id = $request->parent_id;
    	$this->display = $request->display;
    	$file_name = $request->file('avata')->getClientOriginalName();
		$this->avata = $file_name;
    	// $request->file('avata')->move('public/uploads/images/products/categories/',$file_name);
    	$request->file('avata')->move('uploads/images/products/categories/',$file_name);
    	$this->save();

    }
    public function edit($request,$id){
    	$cate = $this::where('id',$id)->get()->first();
    	$cate->name = $request->name;
    	$cate->title = $request->title;
    	$cate->seo_keyword = $request->seo_keyword;
    	$cate->seo_description = $request->seo_description;
    	$cate->url = $request->url;
    	$cate->parent_id = $request->parent_id;
    	$cate->display = $request->display;
    	if($request->hasFile('avata')){ 
            $file_name = $request->file('avata')->getClientOriginalName();
            $cate->avata = $file_name;
            // $request->file('avata')->move('public/uploads/images/products/categories/',$file_name);
    		$request->file('avata')->move('uploads/images/products/categories/',$file_name);
        }  	
    	$cate->save();
    }
}
