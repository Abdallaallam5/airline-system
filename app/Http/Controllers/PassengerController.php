<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passenger;

class PassengerController extends Controller
{

    protected $passenger;

    public function __construct(){

        $this->passenger = new Passenger();
        
    }


    public function index()
    {
        $response['passengers'] = $this->passenger->all();
        return view('pages.passengers.index')->with($response);
    }


    
    public function store(Request $request)
    {
      

        $this->passenger->create($request->all());
        return redirect()->back();

    }

  
    public function edit(string $id)
    {
        $response['passenger'] = $this->passenger->find($id);
        return view('pages.passengers.edit')->with($response);
    }


    public function update(Request $request, string $id)
    {
        $passenger = $this->passenger->find($id);

        $passenger->update(array_merge($passenger->toArray(), $request->toArray()));
        return redirect('passenger');
    }

    public function destroy(string $id)
    {
        $passenger = $this->passenger->find($id);
        if ($passenger) {

            $passenger->delete();
        }
        return redirect('passenger');
    }
}