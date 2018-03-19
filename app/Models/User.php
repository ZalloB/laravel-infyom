<?php

namespace App;

use App\Models\UserCertification;
use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password', 'social_club'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function certification(){
        return UserCertification::where('user_id','=', $this->id)->first();
    }

    public function roles(){
        return $this->belongsToMany(\App\Models\Role::class, 'user_roles', 'user_id', 'role_id');
    }

    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach ($roles as $role){
                if($this->hasRole($role)){
                    return true;
                }
            }
        }else{
            if($this->hasRole($roles)){
                return true;
            }
        }
        return false;
    }

    public function hasRole($role){
        if($this->roles()->where('name','=', $role)->first()){
            return true;
        }
        return false;
    }
}
