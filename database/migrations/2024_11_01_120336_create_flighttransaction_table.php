<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flighttransaction', function (Blueprint $table) {
            $table->id();
            $table->string('seatnumber');
            $table->string('date');
            $table->string('fare');
            $table->foreignId('passenger_id')->constrained('passengers');
            $table->foreignId('flightmaster_id')->constrained('flightmasters');
            $table->foreignId('aircraft_id')->constrained('aircrafts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flighttransaction');
    }
};
