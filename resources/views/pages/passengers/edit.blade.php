@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Passengers Management</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('passenger.update', $passenger->id) }}">
                {!! csrf_field() !!}
                  @method("PATCH")
                    <div class="row">
                        <div class="col-md-6">
                            <label>passenger Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $passenger->name }}">
                        </div>
                        <div class="col-md-6">
                            <label>passenger AGE</label>
                            <input type="string" class="form-control" name="age" value="{{ $passenger->age }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label>Gender</label>
                        <select class="form-select" aria-label="Default select example" name="gender"  value="{{ $passenger->gender }}">
                            <option selected>Open this select menu</option>
                            <option value="male">MALE</option>
                            <option value="female">FEMALE</option>
                           
                          </select>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{ $passenger->phone }}">
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