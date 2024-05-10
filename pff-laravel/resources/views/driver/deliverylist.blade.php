@extends('layout.master')
@section('title', 'DELIVERIES')

@section('content')
<div class="container">
    <h2 class="text-center m-5">Deliveries</h2>
    <div class="d-flex flex-column  justify-content-center ">

    <table class="table table-hover table-responsive table-hover table-info-subtle w-75">
        <thead>
            <tr class="table-success text-center">
                <th class="text-nowrap ">Delivery ID</th>
                <th>Client</th>
                <th>Pickup Location</th>
                <th>Dropoff Location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($Deliveries as $delivery)
                @if ($delivery->status =='Ready')
                    <tr>
                        <td class="text-center">{{ $delivery->delivery_id }}</td>
                        <td class="text-center active   ">{{ $delivery->client->Firstname }}</td>
                        <td class="text-wrap">{{ $delivery->pickuplocation }}</td>
                        <td class="text-wrap">{{ $delivery->dropofflocation }}</td>
                        <td>
                            <form method="POST" action={{ route('accept',$delivery->delivery_id) }}>
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-primary" type="submit">Accept</button>
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
            <div class="">

                {{ $Deliveries->links('pagination::bootstrap-4') }}
            </div>
        </tbody>
    </table>
    </div>

</div>

@endsection
