<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
    protected $table = 'cards';
    protected $fillable = [
        'name', 
        'type',
        'code',
        'dental',
        'time',
        'tooth',
        'labo'
    ];
    public function add($request){
    	$this->name = $request->name;
    	$this->code = $request->code;
    	$this->type = $request->type;
    	$this->dental = $request->dental;
    	$this->labo = $request->labo;
    	$this->tooth = $request->tooth;
    	$this->time = $request->time;
    	$this->save();
    }
    public function edit($request,$id){
    	$item = $this::where('id',$id)->get()->first();
    	$item->name = $request->name;
    	$item->code = $request->code;
    	$item->type = $request->type;
    	$item->dental = $request->dental;
    	$item->labo = $request->labo;
    	$item->tooth = $request->tooth;
    	$item->time = $request->time;
    	$item->save();
    }
}
