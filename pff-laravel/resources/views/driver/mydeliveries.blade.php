@extends('layout.master')
@section('title', 'DELIVERIES')

@section('content')
<x-nav-bar/>

    <h2>Deliveries</h2>

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
                @if ($delivery->driver_id == auth()->user()->user_id)
                    <tr>
                        <td>{{ $delivery->client->Firstname }}</td>
                        <td>{{ $delivery->pickuplocation }}</td>
                        <td>{{ $delivery->pickuptime }}</td>
                        <td>{{ $delivery->dropofftime }}</td>
                        <td>{{ $delivery->dropofflocation }}</td>
                        <td>
                            <form method="POST" action={{ route('cancel',$delivery->delivery_id) }}>
                                @csrf
                                @method('PATCH')
                                <button type="submit">Cancel</button>
                            </form>
                            <form method="POST" action={{ route('confirm',$delivery->delivery_id) }}>
                                @csrf
                                @method('PATCH')
                                <button type="submit">confirm</button>
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
@endsection
