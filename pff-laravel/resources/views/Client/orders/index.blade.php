<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Serl</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Order</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('client.orders.create') }}"> Create Order</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered mb-5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>order number</th>
                    <th>pickUpLocation</th>
                    <th>pickUpTime</th>
                    <th>dropOffLocation</th>
                    <th>dropOffTime</th>
                    <th>status</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->order_number }}</td>
                    <td>{{ $order->pickUpLocation }}</td>
                    <td>{{ $order->pickUpTime }}</td>
                    <td>{{ $order->dropOffLocation }}</td>
                    <td>{{ $order->dropOffTime }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <form action="{{ route('client.orders.destroy',$order->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('client.orders.edit',$order->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $orders->links() !!}
    </div>
    <x-ClientFooter />
</body>

</html>

