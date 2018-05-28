<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $table = "permissions";

    // public function users()
    // {
    //     return $this->hasMany('App\User');
    // }

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
}
