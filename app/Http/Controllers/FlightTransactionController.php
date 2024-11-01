<?php

namespace App\Http\Controllers;

use App\Models\AirCraft;
use App\Models\FlightMasters;
use App\Models\FlightTransaction;
use App\Models\Passenger;
use Illuminate\Http\Request;

class FlightTransactionController extends Controller
{
    protected $flighttransactions;
    public function __construct(){

        $this->flighttransactions = new FlightTransaction();
        
    }

    public function index()
    {
        $flighttransactions=FlightTransaction::with('passenger','FlightMasters','AirCraft')->get();
        $passengers=Passenger::all();
        $flightmasters=FlightMasters::all();
        $aircrafts=AirCraft::all();
        return view('pages.flighttransaction.index',compact('passengers','flightmasters','aircrafts','flighttransactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->flighttransactions->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        $flighttransactions = $this->flighttransactions->find($id);
        if ($flighttransactions) {

            $flighttransactions->delete();
        }
        return redirect('flighttransaction');
    }
}
