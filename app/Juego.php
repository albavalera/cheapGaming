<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class Juego extends Model{
    
    protected $table = 'Juego';
    protected $fillable = ['nombre','precio','tipo','key','info','oferta','imagen'];
    protected $guarded = ['id','id_desarrolladora'];

    public function comments() {
        return $this->hasMany('App\Comment');
    }
    
    public function addComment($body) {
        //dd(Auth::id());
        $this->comments()->create([
            'body' => $body,
            'user_id' => Auth::id()
            ]);
    }
}
