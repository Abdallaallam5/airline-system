@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Flightmaster Management</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('flightmaster.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Departurecity</label>
                            <input type="text" class="form-control" name="Departurecity">
                        </div>
                        <div class="col-md-6">
                            <label>Arrivalcity</label>
                            <input type="text" class="form-control" name="Arrivalcity">


                        </div>
                    
                        <div class="col-md-6">
                            <label>Departuretime</label>
                            <input type="text" class="form-control" name="Departuretime">


                        </div>

                    
                    
                        <div class="col-md-6">
                            <label>Arrivaltime</label>
                            <input type="text" class="form-control" name="Arrivaltime">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-info" value="Register">
                        </div>

                    </div>
                </form>
            </div>

                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Departurecity</th>
                        <th scope="col">Arrivalcity</th>
                        <th scope="col">Departuretime</th>
                        <th scope="col">Arrivaltime</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $flightmaster as $flightmaster )

                        <tr>
                            <td scope="col">{{ $flightmaster->id }}</td>
                            <td scope="col">{{ $flightmaster->Departurecity }}</td>
                            <td scope="col">{{ $flightmaster->Arrivalcity }}</td>
                            <td scope="col">{{ $flightmaster->Departuretime }}</td>
                            <td scope="col">{{ $flightmaster->Arrivaltime }}</td>
                            <td scope="col">

                            <a href="{{  route('flightmaster.edit', $flightmaster->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('flightmaster.destroy', $flightmaster->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>

                          </tr>

                        @endforeach




                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
              background-color:#FFFF00;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush