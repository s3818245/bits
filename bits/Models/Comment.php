<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $primaryKey ='id';

    public function post(){
        return $this-> hasOne('app\Models\Post', 'foreign_key');
    }
    public function user(){
        return $this-> hasOne('app\Models\User', 'foreign_key');
    }
}
