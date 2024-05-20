@props(['pendings'])
<div class="accordion" id="accordionFlush">
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading01">
            <button class="accordion-button text-center fw-bolder  fs-4 collapsed bg-info  bg-opacity-25 " type="button"
                data-bs-toggle="collapse" data-bs-target="#flush-collapse01" aria-expanded="false"
                aria-controls="flush-collapse01">
                Pending Approval
            </button>
        </h2>
        <div id="flush-collapse01" class="accordion-collapse collapse show" aria-labelledby="flush-heading01"
            data-bs-parent="#accordionFlush">
            <div class="accordion-body">
                <table class="table table-responsive ">
                    <thead>
                        <tr>
                            <th>Delivery ID</th>
                            <th>Pickup Time</th>
                            <th>Dropoff Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendings as $pending)
                            <tr>
                                <td>{{ $pending->delivery_id }}</td>
                                <td>{{ $pending->pickuptime }}</td>
                                <td>{{ $pending->dropofftime }}</td>
                                <td>
                                 <span class="badge bg-info">
                                     {{ $pending->status }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
