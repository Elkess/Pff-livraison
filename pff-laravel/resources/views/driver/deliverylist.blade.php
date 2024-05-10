@extends('layout.master')
@section('title', 'DELIVERIES')

@section('content')
    <div class="container">
        <h2 class="text-center m-5">Deliveries</h2>
        <div class="d-flex flex-column ms-5 justify-content-center">
            <table class="table table-hover table-responsive table-hover align-self-center table-info-subtle w-75">
                <thead>
                    <tr class="table-success text-center ">
                        <th class="text-nowrap ">Delivery ID</th>
                        <th>Client</th>
                        <th>Pickup Location</th>
                        <th>Dropoff Location</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($deliveries as $delivery)
                        @if ($delivery->status == 'Ready')
                            <tr>
                                <td class="text-center">{{ $delivery->delivery_id }}</td>
                                <td class="text-center">{{ $delivery->client->Firstname }}</td>
                                <td class="text-wrap">{{ $delivery->pickuplocation }}</td>
                                <td class="text-wrap">{{ $delivery->dropofflocation }}</td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Accept
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Select your
                                                        vehicle</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST"
                                                        action={{ route('accept', $delivery->delivery_id) }}>
                                                        @csrf
                                                        @method('PATCH')
                                                        <select name="vehicle" class=" form-select">
                                                            <option>Select a Vehicule</option>
                                                            @foreach ($vehicles as $vehicle)
                                                                @if ($vehicle->status == 'Available')
                                                                    <option value={{ $vehicle->vehicle_id }}>
                                                                        {{ $vehicle->type }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Accept Order</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @endif
                    @endforeach
                    <div class="align-self-center">
                        {{ $deliveries->links('pagination::bootstrap-4') }}
                    </div>
                </tbody>
            </table>
        </div>

    </div>

@endsection
