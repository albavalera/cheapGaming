<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pay extends Model{
    
    protected $table = 'Facturas';
    protected $fillable = ['PrecioFinal','Usuario'];
    protected $guarded = ['id'];
   
}
