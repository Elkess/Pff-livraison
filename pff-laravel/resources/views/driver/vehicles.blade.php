@extends('layout.master')
@section('title', 'Vehicles')

@section('content')
    <div class="card">
        <h2 class="text-center m-5">Vehicles</h2>
        <div class="row">
            @foreach ($vehicles as $vehicle)
                <div class="col-md-4 mb-4">
                    <div class="card mx-3 shadow-lg  ">
                        <div class="h-50">
                            <img @switch($vehicle->type)
                                        @case('Car')
                                        src="https://d1hv7ee95zft1i.cloudfront.net/custom/blog-post-photo/gallery/chevrolet-colorado-high-country-storm-whilte-philippines-5ebe5dcd8c5e9.jpg"
                                        @break
                                        @case('Truck')
                                        src="https://www.fr8.in/_next/image?url=%2Fimages%2F19-feet.webp&w=1200&q=80"
                                        @break
                                        @case('MotorCycle')
                                        src="https://laquotidienne.ma/uploads/actualites/60375da87f5da.jpg"
                                        @break
                                        @case('Plane')
                                        src="https://static5.depositphotos.com/1007330/475/i/450/depositphotos_4755326-stock-photo-white-passenger-plane-landing-away.jpg"
                                        @break
                                    @default
                                @endswitch
                                class="card-img-top" alt="not loaded" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"> Vehicle ID : {{ $vehicle->vehicle_id }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted"> Vehicle Type : {{ $vehicle->type }}</h6>
                            <p> Status :
                                <span
                                    @switch($vehicle->status)
                                    @case('Available')
                                    class="btn btn-success"
                                    @break
                                    @case('Reported')
                                    class="btn btn-warning"
                                    @break
                                    @case('Damaged')
                                    class="btn btn-danger"
                                    @break
                                    @case('in Maintenance')
                                    class="btn btn-warning"
                                    @break
                                    @case('in Transit')
                                    class="btn btn-primary"
                                    @break 
                                    @default
                                    @endswitch>{{ $vehicle->status }}</span>
                            </p>
                            <p class="card-text">Location : {{ $vehicle->currentlocation }}</p>
                            @if ($vehicle->status != 'Reported')
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#reportModal{{ $vehicle->vehicle_id }}">
                                    Report Vehicle
                                </button>
                                <div class="modal fade" id="reportModal{{ $vehicle->vehicle_id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="1"
                                    aria-labelledby="reportModalLabel{{ $vehicle->vehicle_id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5"
                                                    id="reportModalLabel{{ $vehicle->vehicle_id }}">Report Vehicle</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="mb-2" method="POST"
                                                    action="{{ route('report', $vehicle->vehicle_id) }}">
                                                    @csrf
                                                    <input type="hidden" name="vehicle_id"
                                                        value="{{ $vehicle->vehicle_id }}" />
                                                    <div class="m-3">
                                                        <label class="form-label">Report Details:</label>
                                                        <textarea class="form-control" required name="description" placeholder="Report Description"></textarea>
                                                    </div>
                                                    @error('record')
                                                        {{ $errors }}
                                                    @enderror
                                                    <div class="m-3">
                                                        <label class="form-label">Sujet:</label>
                                                        <input class="form-control" name="subject" placeholder="subject"
                                                            required />
                                                    </div>
                                                    <div class="m-3">
                                                        <label class="form-label">Vehicle Location:</label>
                                                        <input class="form-control" name="location"
                                                            placeholder="Vehicle Location" required />
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-danger" type="submit">Submit</button>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
