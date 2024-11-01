<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AirCraft extends Model
{
    protected $table = 'aircrafts';
    protected $primaryKey = 'id';
     protected $fillable = [
          'airnymber',
          'model',

      ];
      public function flighttransaction(){
        return $this->hasMany('App\Models\FlightTransaction','aircraft_id');

      } 
}
