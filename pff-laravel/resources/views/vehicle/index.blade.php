@extends('layout.master')
@section('title', 'Vehicles')

@section('content')
    <div class="container">
        <h2 class="text-center m-5">Vehicles</h2>
        <div class="row">
            @foreach ($vehicles as $vehicle)
                @if ($vehicle->driver_id == auth()->user()->user_id)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Vehicle ID: {{ $vehicle->vehicle_id }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Vehicle Type: {{ $vehicle->type }}</h6>
                                <p class="card-text">Location : {{ $vehicle->currentlocation }}</p>
                                <p class=" card-text ">Status : {{ $vehicle->status }}</p>
                                <form method="POST" action={{ route('report',$vehicle->vehicle_id) }}>
                                    @csrf
                                    @method('PATCH')
                                    <textarea name="description" class="form-control"></textarea>
                                    <br/>
                                    <button class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
