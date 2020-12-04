<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table='tags';
    protected $primaryKey='id';

    public function games(){
        return $this->belongsToMany('app\Models\Game', 'game_tag', 'tag_id', 'game_id');
    }
}
