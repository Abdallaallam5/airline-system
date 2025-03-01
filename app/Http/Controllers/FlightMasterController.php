<?php

namespace App\Http\Controllers;

use App\Models\FlightMasters;
use Illuminate\Http\Request;

class FlightMasterController extends Controller
{
    protected $flightmaster;

    public function __construct(){

        $this->flightmaster = new FlightMasters();
        
    }


    public function index()
    {
        $response['flightmaster'] = $this->flightmaster->all();
        return view('pages.flightmaster.index')->with($response);
    }


    
    public function store(Request $request)
    {
      

        $this->flightmaster->create($request->all());
        return redirect()->back();

    }

  
    public function edit(string $id)
    {
        $response['flightmaster'] = $this->flightmaster->find($id);
        return view('pages.flightmaster.edit')->with($response);
    }


    public function update(Request $request, string $id)
    {
        $flightmaster = $this->flightmaster->find($id);

        $flightmaster->update(array_merge($flightmaster->toArray(), $request->toArray()));
        return redirect('flightmaster');
    }

    public function destroy(string $id)
    {
        $flightmaster = $this->flightmaster->find($id);
        $flightmaster->delete();
        return redirect('flightmaster');
    }
}
