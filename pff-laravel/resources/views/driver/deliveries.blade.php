@extends('layout.master')
@section('title', 'My Deliveries')

@section('content')
    {{ session('Error') }}
    <div class="card m-5">
        <h1 class="text-center">Bonjour {{ auth()->user()->Firstname }}</h1>
        <h2 class="text-center m-5">Deliveries</h2>
        <div>
            <div class="d-flex flex-row flex-wrap justify-content-evenly">
                @forelse ($Deliveries as $delivery)
                    <div class="card m-2 w-25 shadow-lg">
                        <div class="card-header text-center">
                            <h5 class="card-title">Delivery ID: {{ $delivery->delivery_id }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Client Name: {{ $delivery->client->Firstname }}
                            </h6>
                        </div>

                        <div class="card-body text-wrap text-center ">
                            @if ($delivery->status != 'Picked Up')
                                <h6 class="card-text ">Pickup Location:
                                    <span class="badge bg-body-secondary fs-6 text-black text-wrap">
                                        {{ $delivery->pickuplocation }}
                                    </span>
                                </h6>
                            @else
                            <h6 class="card-text ">Pickup Location:
                                    <span class="badge bg-success opacity-75 fs-6 text-black text-wrap">
                                        {{ $delivery->pickuplocation }}
                                    </span>
                                </h6>
                            @endif

                <h6 class="card-text">Destination:
                    <span class="badge bg-primary fs-6 text-wrap">
                        {{ $delivery->dropofflocation }}
                    </span>
                </h6>
                <h6 class="card-text">Phone Number:
                    <span class="badge bg-info fs-6 text-black  text-wrap">
                        {{ $delivery->client->phonenumber }}
                    </span>
                </h6>

                @if ($delivery->pickuptime != null)
                    <h6 class="badge bg-primary">Pickup Time: {{ $delivery->pickuptime }}</h6>
                @endif
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-evenly flex-wrap ">
                    @switch($delivery->status)
                        @case('Picked Up')
                            <form class="mb-2" method="POST" action={{ route('dropoff', $delivery->delivery_id) }}>
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-success "type="submit">Drop off</button>
                            </form>
                        @break

                        @case('in_transit')
                            <form class="mb-2" method="POST" action={{ route('pickup', $delivery->delivery_id) }}>
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-primary" type="submit">Pick Up</button>
                            </form>
                        @break

                        @default
                    @endswitch

                    @if ($delivery->pickuptime != null)
                        <div class="mb-2">
                            <button class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Cancel</button>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
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
                                            <input type="text" value='1' name="vehicle" hidden />
                                            <div class="mt-3">
                                                <label class=" form-label ">Package Location</label>
                                                <input class="form-control" name="newpickup" placeholder="New location" />
                                            </div>
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
                        <form class="mb-2" method="POST" action={{ route('cancel', $delivery->delivery_id) }}>
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-warning" type="submit">Cancel</button>
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
        </div>
        <div class="card m-5">
            <x-accordion :pendings="$Pendings" />
        </div>
        <div class="card m-5">
            <h2 class="text-center m-5">Completed Deliveries</h2>
            <div class="mx-5">
                <table class="table table-hover table-bordered table-responsive table-striped ">
                    <thead style="background-color: red">
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
                        @forelse ($Delivered as $delivery)
                            @if ($delivery->driver_id == auth()->user()->user_id && $delivery->status == 'Delivered')
                                <tr style="background-color: red">
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
        </div>
        </div>
    @endsection
