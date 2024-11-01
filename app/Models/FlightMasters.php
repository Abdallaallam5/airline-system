<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlightMasters extends Model
{
    protected $table = 'flightmasters';
    protected $primaryKey = 'id';
     protected $fillable = [
          'Departurecity',
          'Arrivalcity',
          'Departuretime',
          'Arrivaltime'
      ];
      public function flighttransaction(){
        return $this->hasMany('App\Models\FlightTransaction','flightmasters_id');

      } 
}
