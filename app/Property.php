<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $fillable = [
       'category_id', 'type_id', 'image', 'currency', 'price', 'address', 'tips', 'description', 'link'
    ];
    
    public function user()
    {
      return $this->belongsTo("App\User");
    }

    public function category()
    {
      return $this->belongsTo("App\Category");
    }

    public function type()
    {
      return $this->belongsTo("App\Type");
    }
  
}
