@extends('layout.master')
@section('title', 'My Deliveries')

@section('content')
    <h2 class="text-center m-5">Deliveries</h2>
    <div class="container">

        <div class="row">
            @forelse ($Deliveries as $delivery)
            @if ($delivery->driver_id == auth()->user()->user_id && $delivery->status == 'Delivered')
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Delivery ID: {{ $delivery->delivery_id }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Client Name: {{ $delivery->client->Firstname }}</h6>
                            <p class="card-text">Pickup Location: {{ $delivery->pickuplocation }}</p>
                            <p class="card-text">Pickup Time: {{ $delivery->pickuptime }}</p>
                            <p class="card-text">Dropoff Time: {{ $delivery->dropofftime }}</p>
                            <p class="card-text">Dropoff Location: {{ $delivery->dropofflocation }}</p>
                            <div class="d-flex justify-content-evenly ">
                                <form class="mb-2" method="POST" action={{ route('cancel', $delivery->delivery_id) }}>
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-secondary "type="submit">Cancel</button>
                                </form>
                                <form class="mb-2" method="POST" action={{ route('dropoff', $delivery->delivery_id) }}>
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-success"type="submit">Drop off</button>
                                </form>
                                <form class="mb-2" method="POST" action={{ route('pickup', $delivery->delivery_id) }}>
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-primary"type="submit">Picked Up</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @empty
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">NO Delivery Available</p>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
    
    {{ session('Error') }}


    <h2 class="text-center m-5">Completed Deliveries</h2>
<div class="m-5">
    <table class="table table-hover table-bordered table-responsive table-striped table-primary ">
        <thead>
            <tr>
                <th>Delivery id</th>
                <th>Client Name</th>
                <th>Pickup Location</th>
                <th>Pickup Time</th>
                <th>Dropoff Time</th>
                <th>Dropoff Location</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($Deliveries as $delivery)
            @if ($delivery->driver_id == auth()->user()->user_id && $delivery->status == 'Delivered')
                    <tr>
                        <td>{{ $delivery->delivery_id }}</td>
                        <td>{{ $delivery->client->Firstname }}</td>
                        <td>{{ $delivery->pickuplocation }}</td>
                        <td>{{ $delivery->pickuptime }}</td>
                        <td>{{ $delivery->dropofftime }}</td>
                        <td>{{ $delivery->dropofflocation }}</td>
                    </tr>
                    @endif
            @empty
            <tr>
                <td colspan="7">NO Delivery Available</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

</div>
@endsection
