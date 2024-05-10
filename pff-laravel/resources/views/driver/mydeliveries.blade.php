@extends('layout.master')
@section('title', 'My Deliveries')

@section('content')
    {{ session('Error') }}
    <h2 class="text-center m-5">Deliveries</h2>
    <div>
        <div class="d-flex flex-row flex-wrap justify-content-evenly">
            @forelse ($Deliveries as $delivery)
                    <div class="card m-2 w-25 shadow-sm">
                        <div class="card-header text-center">
                            <h5 class="card-title">Delivery ID: {{ $delivery->delivery_id }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Client Name: {{ $delivery->client->Firstname }}</h6>
                        </div>
                        <div class="card-body text-wrap">
                            <p class="card-text">Pickup Location: {{ $delivery->pickuplocation }}</p>
                            <p class="card-text">Pickup Time: {{ $delivery->pickuptime }}</p>
                            <p class="card-text">Dropoff Time: {{ $delivery->dropofftime }}</p>
                            <p class="card-text">Dropoff Location: {{ $delivery->dropofflocation }}</p>
                        </div>
                        <div class="card-footer">
                             <div class="d-flex justify-content-evenly flex-wrap ">
                                    <form class="mb-2" method="POST"
                                        action={{ route('pickup', $delivery->delivery_id) }}>
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-primary"type="submit">Picked Up</button>
                                    </form>
                                    <form class="mb-2" method="POST"
                                        action={{ route('dropoff', $delivery->delivery_id) }}>
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-success"type="submit">Drop off</button>
                                    </form>
                                    @if ($delivery->pickuptime != null)
                                        <div class="mb-2">
                                            <button class="btn btn-danger " data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Cancel</button>
                                        </div>
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5">Cancel Delivery</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form class="mb-2" method="POST"
                                                        action={{ route('cancel', $delivery->delivery_id) }}>
                                                        <div class="modal-body">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input class="form-control" name="newpickup"
                                                                placeholder="New location" />
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-danger "type="submit">Submit</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <form class="mb-2" method="POST"
                                            action={{ route('cancel', $delivery->delivery_id) }}>
                                            @csrf
                                            @method('PATCH')
                                            <button class="btn btn-warning"type="submit">Cancel</button>
                                        </form>
                                    @endif
                                </div>
                        </div>
                    </div>
            @empty
                <div class=" text-center ">
                    <p class="card-text">NO Delivery Available</p>
                </div>
            @endforelse
        </div>
    </div>





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
                        <td class="text-center" colspan="7">Nothing Delivered yet :</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <!--Cancel form -->
    </div>
@endsection
