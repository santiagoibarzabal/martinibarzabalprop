<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{ 
  protected $fillable = [
    'name', 'property_id'
 ];

    public function property()
    {
      return $this->belongsTo("App\Property");
    } 
}
