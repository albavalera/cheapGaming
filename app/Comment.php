<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     use DatePresenter;
 
  // fields can be filled
  protected $guarded = ['id'];
  protected $fillable = ['coment', 'id_juego', 'id_user'];
 
  public function juego()
  {
    return $this->belongsTo('App\Juego');
  }
 
  public function user()
    {
        return $this->belongsTo(User::class);
    }
}
