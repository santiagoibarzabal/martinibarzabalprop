<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function properties()
    {
      return $this->belongsTo("App\Property");
    } 
    public function images()
    {
      return $this->hasMany("App\Image");
    } 
}
