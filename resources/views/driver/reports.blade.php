@extends('layout.master')
@section('title', 'Reports')
@section('content')
    <div class="card">
        <h2 class="text-center m-5">Report History</h2>
        <div class="d-flex flex-wrap justify-content-center  ">
            @forelse ($reports as $report)
                <div class="m-3 mb-4 shadow-sm">
                    <div class="card">
                        <div class="card-header">
                            <b>
                                Report n°{{ $report->report_id }}
                            </b>
                        </div>

                        <div class="card-body">
                            @if ($report->delivery_id != null)
                                <h5 class="card-subtitle"> Delivery ID : {{ $report->delivery_id }}</h5>
                            @endif
                            <h5 class="card-title "> Subject :<b>{{ $report->subject }}</b></h5>
                            <textarea class="card-text w-100" disabled>{{ $report->description }}</textarea>
                            <p class="card-subtitle">Date : {{ $report->created_at }}</p>
                            <p class="card-subtitle">Location :{{ $report->location }}</p>
                        </div>

                    </div>
                </div>
            @empty
                <span class="text-center my-4"> Nothing to Report </span>
            @endforelse
        </div>
    </div>
@endsection
