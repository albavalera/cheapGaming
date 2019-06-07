<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyUsers extends Model
{
    protected $table = 'buyusers';
    protected $fillable = ['User','Date','GamesBought'];
    protected $guarded = ['id'];
   
}
