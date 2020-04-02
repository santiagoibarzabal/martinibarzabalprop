<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function properties()
    {
      return $this->hasMany(Property::Class);
    }
}
