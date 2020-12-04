<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'id';

    public function game(){
        return $this->hasOne('app\Models\Game', 'foreign_key');
    }
    public function user(){
        return $this->hasOne('app\Models\User', 'foreign_key');
    }
    public function vote(){
        return $this->belongsToMany('app\Models\User', 'vote', 'post_id', 'user_id') ->withPivot('vote_choice');
    }
    public function comments(){
        return $this->hasMany('app\Models\Comment');
    }
}
