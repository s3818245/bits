<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'id';

    public function post_of_game(){
        return $this->belongsTo('app\Models\Game', 'foreign_key');
    }
    public function post_by_user(){
        return $this->belongsTo('app\Models\User', 'foreign_key');
    }
    public function voted_by(){
        return $this->belongsToMany('app\Models\User', 'vote', 'post_id', 'user_id') ->withPivot('vote_choice');
    }
    public function hascomments(){
        return $this->hasMany('app\Models\Comment');
    }
}
