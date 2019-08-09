<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'lastname'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

   
    public function store($request){
        return User::create($request);
    }

    public function scopeUsers($query,$status){
        return $query->orderById()->byStatus($status);
    }
    public function scopeOrderById($query){
        return $query->orderBy('id','desc');
    }
    public function scopeByStatus ($query,$status){
        return $query->where('status',$status);
    }    
}
