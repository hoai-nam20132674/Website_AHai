<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductImage;
use App\PCID;
use App\User;

class Product extends Model
{
    //
    protected $table = 'products';
    public function add($request){
    	$this->name = $request->name;
        if($request->title == ''){
            $this->title = $request->name;
        }
        else{
            $this->title = $request->title;
        }
        $user_id = $request->user_id;
        $strrpos = strrpos($user_id,"-");
        $user_id = substr($user_id,$strrpos+1);
        $user = User::where('phone',$user_id)->get()->first();
        $this->user_id = $user->id;
    	
    	$this->seo_keyword = $request->seo_keyword;
    	$this->seo_description = $request->seo_description;
    	$this->url = $request->url;
    	$this->content = $request->content;
    	$this->display = $request->display;
        $this->short_description = $request->short_description;
        $this->hot = $request->hot;
        $this->best_sale = $request->best_sale;
        $this->price = $request->price;
        $this->sale = $request->sale;
    	$file_name = $request->file('avata')->getClientOriginalName();
		$this->avata = $file_name;
    	// $request->file('avata')->move('public/uploads/images/products/avatars/',$file_name);
    	$request->file('avata')->move('uploads/images/products/avatars/',$file_name);
    	$this->save();
        $url = $request->url.'-pi'.$this->id;
        $this->url = $url;
        $this->save();

    	$avata = new ProductImage;
    	$avata->url = $file_name;
    	$avata->role = 1;
    	$avata->product_id = $this->id;
    	$avata->save();

    	$categories = $request->categories;
    	$count = count($categories);
    	for($j=0;$j<$count;$j++){
            $pcid = new PCID;
            $pcid->product_id = $this->id;
            $pcid->cate_id = $categories[$j];
            $pcid->save();
        }

        if($request->hasFile('images')){ 
        	foreach($request->file('images') as $file){
                if(isset($file)){
                    $file_name = $file->getClientOriginalName();
                    $image = new ProductImage;
			    	$image->url = $file_name;
			    	$image->role = 0;
			    	$image->product_id = $this->id;
			    	$image->save();
			    	$file->move('uploads/images/products/details/',$file_name);
                }
            }
            
        }

    }
    public function edit($request,$id){
        $product = $this::where('id',$id)->get()->first();
        $product->name = $request->name;
        if($request->title == ''){
            $product->title = $request->name;
        }
        else{
            $product->title = $request->title;
        }
        $user_id = $request->user_id;
        $strrpos = strrpos($user_id,"-");
        $user_id = substr($user_id,$strrpos+1);
        $user = User::where('phone',$user_id)->get()->first();
        $product->user_id = $user->id;
        $product->seo_keyword = $request->seo_keyword;
        $product->seo_description = $request->seo_description;
        $url = $request->url.'-pi'.$product->id;
        $product->url = $url;
        $product->content = $request->content;
        $product->display = $request->display;
        $product->hot = $request->hot;
        $product->short_description = $request->short_description;
        $product->best_sale = $request->best_sale;
        $product->price = $request->price;
        $product->sale = $request->sale;
        if($request->hasFile('avata')){ 
            $file_name = $request->file('avata')->getClientOriginalName();
            $product->avata = $file_name;
            $request->file('avata')->move('uploads/images/products/avatars/',$file_name);
            // $request->file('avata')->move('uploads/images/blogs/categories/',$file_name);
        }
        $product->save();
        $categories = $request->categories;
        $count = count($categories);
        $itemDeletes = PCID::where('product_id',$id)->whereNotIn('cate_id',$categories)->get();
        foreach($itemDeletes as $itemDelete){
            $itemDelete->delete();
        }
        for($j=0;$j<$count;$j++){
            $item = PCID::where('cate_id',$categories[$j])->where('product_id',$id)->get();
            if(count($item)==0){
                $scid = new PCID;
                $scid->product_id = $id;
                $scid->cate_id = $categories[$j];
                $scid->save();
            }
            
        }
        if($request->hasFile('images')){ 
            foreach($request->file('images') as $file){
                if(isset($file)){
                    $file_name = $file->getClientOriginalName();
                    $image = new ProductImage;
                    $image->url = $file_name;
                    $image->role = 0;
                    $image->product_id = $id;
                    $image->save();
                    $file->move('uploads/images/products/details/',$file_name);
                }
            }
            
        }
        $image_detail = ProductImage::where('product_id',$id)->where('role',0)->get();
        foreach($image_detail as $image){
            if($request->hasFile($image->id)){
                $file = $request->file($image->id);
                $file_name = $file->getClientOriginalName();
                $image->url = $file_name;
                $file->move('uploads/images/products/details/',$file_name); 
                $image->save();
            }
        }

    }
}
