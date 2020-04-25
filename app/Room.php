<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
  protected $fillable = [
    'name'
 ];
    public function property()
    {
      return $this->belongsTo("App\Property");
    }   
}
