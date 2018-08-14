<?php

namespace App;

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
    
    public function roles(){

        return $this->belongsToMany(role::class);
    }

    /**
* @param string|array $roles
*/

    public function authorizeRoles($roles)
    {
        if (is_array($roles)){
            return $this->hasAnyRole($roles);
                abort(401, 'This action is not authorized');
        }
        return $this->hasRole($roles) ||
            abort(401, 'Unauthorized action');
    }

    /**
* Check multiple roles
* @param array $roles
*/
    public function hasAnyRoles($roles)
    {
        return null!== $this->roles()->whereIn('name', $roles)->first();
    }
    
    Public function hasRole($role){

        return null !== $this->roles()-where('name', $role)->first();
    }
}
