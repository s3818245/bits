<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = 'games';
    protected $primaryKey = 'id';

    public function gametags(){
        return $this->belongsToMany('app\Models\Tag', 'game_tag', 'game_id', 'tag_id');
    }
    public function admin(){
        return $this->hasOne('app\Models\User', 'foreign_key');
    }
    public function rates(){
        return $this->belongsToMany('app\Models\User', 'rate', 'game_id', 'user_id')->withPivot('value','rate_comment', 'date_rate');
    }
    public function members(){
        return $this->belongsToMany('app\Models\User', 'user_game', 'game_id', 'user_id');
    }
    public function posts(){
        return $this->hasMany('app\Models\Post');
    }
}
