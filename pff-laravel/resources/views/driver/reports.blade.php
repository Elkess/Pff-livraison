@extends('layout.master')
@section('content')
    <div class="card">
        <h2 class="text-center m-5">Vehicles</h2>
        <div class="row">
            @forelse ($reports as $report)
                <div class="col-md-4 mb-4 shadow-sm ">
                    <div class="card">
                        <div class="card-header">
                            Report : {{ $report->report_id }}
                        </div>
                        <div class="card-body">
                            {{-- <h3 class="card-title">{{ $report->subject }}</h3> --}}
                            <h5 class="card-subtitle ">Location : {{ $report->location }}</h5>
                            <textarea class="card-text" disabled >{{ $report->description }}</textarea>
                        <h4 class="card-subtitle">{{ $report->createdAt }}</h4>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
                @empty
                    <span class="text-center my-4"> Nothing to Report </span>
            @endforelse
        </div>
    </div>
@endsection
