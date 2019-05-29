<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juego extends Model{
    
    protected $table = 'Juego';
    protected $fillable = ['nombre','precio','tipo','key','info','oferta','imagen'];
    protected $guarded = ['id','id_desarrolladora'];
   

}
