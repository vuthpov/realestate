<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Staffs;
use App\Roles;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'UserId';
    protected $fillable = [
        'username', 'password', 'roleid'
    ];

    public function role()
    {
        return $this->hasOne('App\Role', 'roleId', 'roleId');
    }

    public function currentStaff()
    {
        $staff = Staffs::find($this->staffId);
        return $staff;
    }

    public function currentRole()
    {
        $role = Role::find($this->roleId);
        return $role;
    }




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
}
