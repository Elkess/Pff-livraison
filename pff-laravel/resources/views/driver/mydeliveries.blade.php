@extends('layout.master')
@section('title', 'My Deliveries')

@section('content')
    <x-nav-bar />

    <h2>Deliveries</h2>
    {{ session('Error') }}
    @php
        $showPickupTime = false;
        $showDropoffTime = false;
    @endphp
    <table class="table table-hover table-bordered table-responsive table-striped table-primary ">
        <thead>
            <tr>
                <th>Client Name</th>
                <th>Pickup Location</th>
                <th>Pickup Time</th>
                <th>Dropoff Time</th>
                <th>Dropoff Location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($Deliveries as $delivery)
                @if ($delivery->driver_id == auth()->user()->user_id && $delivery->status != 'Delivered')
                    <tr>
                        <td>{{ $delivery->client->Firstname }}</td>
                        <td>{{ $delivery->pickuplocation }}</td>
                        @if ($delivery->pickuptime !== null)
                            <td>{{ $delivery->pickuptime }}</td>
                            <td>{{ $delivery->dropofftime }}</td>
                        @else
                            <td>Waiting</td>
                            <td>Waiting</td>
                        @endif
                        <td>{{ $delivery->dropofflocation }}</td>
                        <td>
                            <form method="POST" action={{ route('cancel', $delivery->delivery_id) }}>
                                @csrf
                                @method('PATCH')
                                <button type="submit">Cancel</button>
                            </form>
                            <form method="POST" action={{ route('dropoff', $delivery->delivery_id) }}>
                                @csrf
                                @method('PATCH')
                                <button type="submit">Drop off</button>
                            </form>
                            <form method="POST" action={{ route('pickup', $delivery->delivery_id) }}>
                                @csrf
                                @method('PATCH')
                                <button type="submit">Picked Up</button>
                            </form>
                        </td>
                        
                    </tr>
                @endif
            @empty
                <tr>
                    <td colspan="7">NO Delivery Available</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <h2>Completed Deliveries</h2>
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
@endsection
