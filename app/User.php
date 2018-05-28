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
        'password'
    ];

    protected $table = "users";

    public function role()
    {
        return $this->belongsToMany('App\Role', 'user_role', 'user_id');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Course', 'user_course', 'user_id');
    }

    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute)
        {
        parent::setAttribute($key, $value);
        }
    }

    public function enrollements()
    {
        return $this->hasMany('App\Enrollments');
    }

    public function userCourse()
    {
        return $this->hasMany('App\UserCourse');
    }
}
