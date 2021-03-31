<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    //
    public function add($request){
    	$this->href = $request->href;
    	$this->display = $request->display;
    	$this->target = $request->target;
    	$this->stt = $request->stt;
    	$this->type= $request->type;
    	$file_name = $request->file('images')->getClientOriginalName();
		$this->url = $file_name;
    	// $request->file('avata')->move('public/uploads/images/products/avatas/',$file_name);
    	$request->file('images')->move('uploads/images/adss/',$file_name);
    	$this->save();
    }
    public function edit($request, $id){
    	$slider = $this::where('id',$id)->get()->first();
    	$slider->href = $request->href;
    	$slider->display = $request->display;
    	$slider->target = $request->target;
    	$slider->stt = $request->stt;
    	$slider->type = $request->type;
    	if($request->hasFile('images')){ 
	    	$file_name = $request->file('images')->getClientOriginalName();
			$slider->url = $file_name;
	    	// $request->file('avata')->move('public/uploads/images/products/avatas/',$file_name);
    		$request->file('images')->move('uploads/images/adss/',$file_name);
	    }
	    $slider->save();
    }
}
