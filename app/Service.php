<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $fillable = [
    'name', 'property_id'
 ];
 
    public function property()
    {
      return $this->belongsTo("App\Property");
    }   
}
