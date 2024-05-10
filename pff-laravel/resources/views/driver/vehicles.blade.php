@extends('layout.master')
@section('title', 'Vehicles')

@section('content')
    <div class="container">
        <h2 class="text-center m-5">Vehicles</h2>
        <div class="row">
            @foreach ($vehicles as $vehicle)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="h-50">

                                <img @switch($vehicle->type)
                                    @case('Car')
                                    src="https://d1hv7ee95zft1i.cloudfront.net/custom/blog-post-photo/gallery/chevrolet-colorado-high-country-storm-whilte-philippines-5ebe5dcd8c5e9.jpg"
                                        @break
                                    @case('Truck')
                                        src="https://www.fr8.in/_next/image?url=%2Fimages%2F19-feet.webp&w=1200&q=80"
                                        @break
                                        @case('MotorCycle')
                                        src="https://lh5.googleusercontent.com/proxy/J1X0UZXTZMTgqQrclv4V9Gpa7HxitYMA9mHRv01hr42cYQBpdRnRfCLKwpSHtOI-8ntWAB6tIuZe47eF6fYSAwkx5Wx4rOR-1X3VJfaikqCWLRLc1sg75AKnR22Kj15fNGdfHpc"
                                        @break
                                        @case('Plane')
                                        src='https://e3.365dm.com/21/07/1600x900/skynews-boeing-737-plane_5435020.jpg?20210702173340'
                                        
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
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Report Vehicle</button>

                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Report Vehicle</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="mb-2" method="POST" action={{ route('report', $vehicle->vehicle_id) }}>
                                                    <div class="modal-body">
                                                        @csrf
                                                        <input name="vehicle_id" value={{ $vehicle->vehicle_id }} hidden />
                                                        <input class="form-control"
                                                         name="location"
                                                            placeholder="Vehicle Location" />
                                                        <textarea class="form-control" name="description" placeholder="Report Description">
                                                        </textarea>
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
                                </div>
                                {{-- <form method="POST" action={{ route('report', $vehicle->vehicle_id) }}>
                                    @csrf
                                    @method('PATCH')
                                    <textarea name="description" class="form-control"></textarea>
                                    <br />
                                    <button class="btn btn-primary">Submit</button>
                                </form> --}}
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection
