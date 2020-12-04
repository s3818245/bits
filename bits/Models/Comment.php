<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $primaryKey ='id';

    public function comment_of_post(){
        return $this-> belongsTo('app\Models\Post', 'foreign_key');
    }
    public function comment_by_user(){
        return $this-> belongsTo('app\Models\User', 'foreign_key');
    }
}
