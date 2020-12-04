<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $keyType = 'string';
    protected $fillable = [
        'name',
        'username',
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
        'username_verified_at' => 'datetime',
    ];

    /**
     * Relationships
     */

    public function gameJoined(){
        return $this-> belongsToMany('app\Models\Game','user_game', 'user_id', 'game_id');
    }
    public function vote(){
        return $this->belongsToMany('app\Models\Post', 'vote', 'user_id', 'game_id') ->withPivot('vote_choice');
    }
    public function comment(){
        return $this->hasMany('app\Models\Comment');
    }
    public function post(){
        return $this->hasMany('app\Models\Post');
    }
    public function rates(){
        return $this->belongsToMany('app\Models\Game', 'rate', 'user_id', 'game_id')->withPivot('value','rate_comment', 'date_rate');
    }
    public function adminPages(){
        return $this->hasMany('app\Models\Game');
    }
}
