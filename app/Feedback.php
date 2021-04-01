<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Feedback extends Model
{
    //
    public function add($product_id,$request){
    	$this->user_id = Auth::user()->id;
    	$this->product_id = $product_id;
    	$this->rate = $request->rate;
    	$this->messages = $request->messages;
    	$this->save();
    }
}
