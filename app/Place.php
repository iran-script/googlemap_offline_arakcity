<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
  protected $table='Tiles';

public function tilesdata()
    {
        return $this->hasOne('App\Zone');
    }
}
