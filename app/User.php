<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use TCG\Voyager\Traits\HasRelationships;
 
class User extends \TCG\Voyager\Models\User
{
    use Notifiable;
    //use HasRelationships;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname','lname',  'email', 'password','company','VAT','Address','country','verifyToken','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*public function is_admin()
    {
        if($this->role_id==1)
        {
            return true;
        }
        return false;
    }*/

public function laundry(){
    return $this->hasMany(Laundry::class);
}
public function banner(){
    return $this->hasMany(Banner::class);
}


    public function roles()
    {
       return $this->belongsToMany("App\\Role");
    }

 public function authorizeRoles($roles)
{
  if (is_array($roles)) {
      return $this->hasAnyRole($roles) || 
             abort(401, 'This action is unauthorized.');
  }
  return $this->hasRole($roles) || 
         abort(401, 'This action is unauthorized.');
}
/**
* Check multiple roles
* @param array $roles
*/
public function hasAnyRole($roles)
{
  return null !== $this->roles()->whereIn(‘name’, $roles)->first();
}
/**
* Check one role
* @param string $role
*/
public function hasRole($role)
{
  return null !== $this->roles()->where(‘name’, $role)->first();
}
}
