<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $fillable = [
       'category_id', 'type_id', 'image', 'currency', 'price', 'address', 'town', 'tips', 'description','full_description','link','features','rooms','services', 'expenses', 'alt_text', 'slug',
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

    public function features()
    {
      return $this->hasMany(Feature::Class);
    }

    public function rooms()
    {
      return $this->hasMany(Room::Class);
    }

    public function services()
    {
      return $this->hasMany(Service::Class);
    }

    public function gallery()
    {
      return $this->hasOne("App\Gallery");
    } 
  
}
