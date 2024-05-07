@extends('layout.master')
@section('title', 'DELIVERIES')

@section('content')
<div class="container">
    <h2 class="text-center m-5">Deliveries</h2>
    <table class="table table-hover table-bordered table-responsive table-striped table-info ">
        <thead>
            <tr>
                <th>Delivery ID</th>
                <th>Client</th>
                <th>Pickup Location</th>
                <th>Dropoff Location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($Deliveries as $delivery)
                @if ($delivery->status =='Ready')
                    <tr class="table-light">
                        <td>{{ $delivery->delivery_id }}</td>
                        <td>{{ $delivery->client->Firstname }}</td>
                        <td>{{ $delivery->pickuplocation }}</td>
                        <td>{{ $delivery->dropofflocation }}</td>
                        <td>
                            <form method="POST" action={{ route('accept',$delivery->delivery_id) }}>
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-primary" type="submit">Accept</button>
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
</div>

@endsection
