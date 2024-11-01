<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlightTransaction extends Model
{
    protected $table = 'flighttransaction';
    protected $primaryKey = 'id';
     protected $fillable = [
          'seatnumber',
          'date',
          'fare',
          'passenger_id',
          'flightmaster_id',
          'aircraft_id'
      ];
      public function passenger(){
        return $this->belongsTo('App\Models\Passenger','passenger_id','id');

      } 
      public function FlightMasters(){
        return $this->belongsTo('App\Models\FlightMasters','flightmasters_id','id');

      } 
      public function AirCraft(){
        return $this->belongsTo('App\Models\AirCraft','aircraft_id','id');

      } 
}
