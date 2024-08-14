<?php

namespace App\Models;

use PharIo\Manifest\Email;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getGravatarAttribute()
    {
        $hash = md5(strtolower($this->attributes['email']));
        return "http://s.gravatar.com/avatar/$hash";
    }
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}

