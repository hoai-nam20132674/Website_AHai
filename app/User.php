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
        $this->avatar ='avatar_default.png';
        $this->password = Hash::make($request->password);
        $this->save();
        return true;
        
    }
    public function merchantEditInfo($request){
        $user = Auth::user();
        $user->name = $request->name;
        $user->name_s = $request->name_s;
        $user->address = $request->address;
        if($request->hasFile('avata')){
            $file_name = $request->file('avata')->getClientOriginalName();
            $user->avatar = $file_name;
            // $request->file('avata')->move('public/uploads/images/products/avatars/',$file_name);
            $request->file('avata')->move('uploads/images/users/avatars/',$file_name);
        }
        $user->save();
    }

    public function add($request){
        if(Auth::user()->role == 1 || Auth::user()->role == 2){
            $this->name = $request->name;
            $this->email = $request->email;
            $this->phone = $request->phone;
            $this->role = $request->role;
            $this->status = $request->status;
            $this->avatar ='avatar_default.png';
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
    public function merchantEditPassword($request){
        $login =array(
            'email'=> Auth::user()->email,
            'password'=>$request->old_password
        );
        $login2 =array(
            'phone'=>Auth::user()->phone,
            'password'=>$request->old_password
        );
        if(Auth::attempt($login) || Auth::attempt($login2)){

            Auth::user()->password= Hash::make($request->password);
            Auth::user()->save();
            return true;
        }
        else{
            return false;
        }
    }
}
