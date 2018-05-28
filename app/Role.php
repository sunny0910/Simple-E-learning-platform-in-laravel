<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $table = "roles";

    public function permissions()
    {
        return $this->hasMany('App\Permissions');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'user_role', 'role_id');
    }
}
