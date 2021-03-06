<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','img','description'
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
    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function articles(){
        return $this->hasMany(Article::class);
    }
    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }

    public function isAdmin()
    {
        return ($this->role_id == 1);

    }
    public function isWebmaster()
    {
        return ($this->role_id == 2);
    }
    public function isRedacteur()
    {
        return ($this->role_id == 3);
    }
    public function isMembre()
    {
        return ($this->role_id == 4);
    }
}
