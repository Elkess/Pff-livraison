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
                                <img @switch($vehicle->type)
                                    @case('Car')
                                    src="https://d1hv7ee95zft1i.cloudfront.net/custom/blog-post-photo/gallery/chevrolet-colorado-high-country-storm-whilte-philippines-5ebe5dcd8c5e9.jpg"
                                        @break
                                    @case('Truck')
                                        
                                        src="https://www.fr8.in/_next/image?url=%2Fimages%2F19-feet.webp&w=1200&q=80"
                                        @break
                                        @case('Motorcycle')
                                        src="https://www.dayangmoto.com/uploads/202131172/150cc-air-cooling-tricycle-delivery-van02056640462.jpg"
                                        @break
                                        @case('Plane')
                                        src="https://e3.365dm.com/21/07/1600x900/skynews-boeing-737-plane_5435020.jpg?20210702173340"
                                        
                                        @break
                                    @default
                                        
                                @endswitch
                                    class="card-img-top" alt="not loaded" />
                                <h5 class="card-title"> Vehicle ID : {{ $vehicle->vehicle_id }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted"> Vehicle Type : {{ $vehicle->type }}</h6>
                                <p> Status :
                                    <span
                                        @switch($vehicle->status)
                                    @case('Available')
                                    class="btn btn-success"
                                    @break
                                    @case('Damaged')
                                    class="btn btn-danger"
                                    @break
                                    @case('in Maintenance')
                                    class="btn btn-info"
                                    @break
                                    @case('in Transit')
                                    class="btn btn-primary"
                                    @break
                                    @default
                                    @endswitch>{{ $vehicle->status }}</span>
                                </p>
                                <p class="card-text">Location : {{ $vehicle->currentlocation }}</p>
                                <form method="POST" action={{ route('report', $vehicle->vehicle_id) }}>
                                    @csrf
                                    @method('PATCH')
                                    <textarea name="description" class="form-control"></textarea>
                                    <br />
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
