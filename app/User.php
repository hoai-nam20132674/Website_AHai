<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function addMerchant($request){
        
        $this->name = $request->name;
        $this->email = $request->email;
        $this->phone = $request->phone;
        $this->role = 4;
        $this->status = 1;
        $this->password = Hash::make($request->password);
        $this->save();
        return true;
        
    }

    public function add($request){
        if(Auth::user()->role == 1 || Auth::user()->role == 2){
            $this->name = $request->name;
            $this->email = $request->email;
            $this->phone = $request->phone;
            $this->role = $request->role;
            $this->status = $request->status;
            $this->password = Hash::make($request->password);
            $this->save();
            return true;
        }
        else{
            return false;
        }
    }
    public function edit($request, $id){
        if(Auth::user()->id == $id || Auth::user()->role ==1){
            $user = $this::where('id',$id)->get()->first();
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->status = $request->status;
            $user->role = $request->role;
            $user->save();
            return true;
        }
        else{
            return false;
        }
    }
    public function editPassword($request,$id){
        if(Auth::user()->id == $id){
            $user = $this::where('id',$id)->get()->first();
            $user->password = Hash::make($request->password);
            $user->save();
            return true;
        }
        else{
            return false;
        }
    }
}
