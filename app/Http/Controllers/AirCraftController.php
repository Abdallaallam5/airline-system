<?php

namespace App\Http\Controllers;

use App\Models\AirCraft;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class AirCraftController extends Controller
{
    protected $aircraft;

    public function __construct(){

        $this->aircraft = new AirCraft();
        
    }


    public function index()
    {
        $response['aircrafts'] = $this->aircraft->all();
        return view('pages.aircraft.index')->with($response);
    }


    
    public function store(Request $request)
    {
      

        $this->aircraft->create($request->all());
        return redirect()->back();

    }

  
    public function edit(string $id)
    {
        $response['aircrafts'] = $this->aircraft->find($id);
        return view('pages.aircraft.edit')->with($response);
    }


    public function update(Request $request, string $id)
    {
        $aircraft = $this->aircraft->find($id);

        $aircraft->update(array_merge($aircraft->toArray(), $request->toArray()));
        return redirect('aircraft');
    }

    public function destroy(string $id)
    {
        $aircraft = $this->aircraft->find($id);

        if ($aircraft) {

            $aircraft->delete();
        }
        return redirect('aircraft');
    }
}