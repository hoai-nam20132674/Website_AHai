<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart;
use App\OrderDetail;

class Order extends Model
{
    //
    public function add($request,$items){
    	$this->name = $request->name;
    	$this->phone = $request->phone;
    	$this->address = $request->address;
    	$this->messages = $request->messages;
    	$this->status = 0;
    	$this->save();
    	foreach($items as $item){
    		$order_detail = new OrderDetail;
    		$order_detail->orders_id = $this->id;
    		$order_detail->products_id = $item->id;
    		$order_detail->status =0;
    		$order_detail->qty = $item->qty;
    		$order_detail->amount = $item->qty*$item->price;
    		$order_detail->save();
    	}
    	
    }
}
