<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
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

    public function addUser($request){
        if(Auth::user()->role && Auth::user()->id == Auth::user()->parent_id){
            $this->name = $request->name;
            $this->email = $request->email;
            $this->phone = $request->phone;
            $this->password = Hash::make($request->password);
            $this->role = 1;
            $this->parent_id = Auth::user()->id;
            $this->systems_id = Auth::user()->systems_id;
            $this->save();
        }
    }
}
