<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Desarrolladora extends Model{
    
    protected $table = 'Desarrolladoras';
    protected $fillable = ['Nom_plataforma','Info','Imagen'];
    protected $guarded = ['id'];
   
}
