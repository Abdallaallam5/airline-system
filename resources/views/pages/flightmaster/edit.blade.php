@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Flight Masters</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('flightmaster.update', $flightmaster->id) }}">
                {!! csrf_field() !!}
                  @method("PATCH")
                    <div class="row">
                        <div class="col-md-6">
                            <label>Departurecity</label>
                            <input type="text" class="form-control" name="Departurecity" value="{{ $flightmaster->Departurecity }}">
                        </div>
                        <div class="col-md-6">
                            <label>Arrivalcity</label>
                            <input type="string" class="form-control" name="Arrivalcity" value="{{ $flightmaster->Arrivalcity }}">
                        </div>
                        <div class="col-md-6">
                            <label>Departuretime</label>
                            <input type="string" class="form-control" name="Departuretime" value="{{ $flightmaster->Departuretime }}">
                        </div>
                        <div class="col-md-6">
                            <label>Arrivaltime</label>
                            <input type="string" class="form-control" name="Arrivaltime" value="{{ $flightmaster->Arrivaltime }}">
                        </div>
                    </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>

                    </div>
                </form>
            </div>

            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
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