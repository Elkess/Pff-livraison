<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <x-navbar />
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Order</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary mb-2 mt-1 " href="{{ route('orders.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('orders.update',$order->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ $order->name }}" class="form-control" placeholder="Name">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="email" name="email" class="form-control" value="{{ $order->email }}" placeholder="Email">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address:</strong>
                        <input type="text" name="address" value="{{ $order->address }}" class="form-control" placeholder="Address">
                        @error('address')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group" >
                        <strong>Mobile:</strong>
                        <input type="text" name="mobile" value="{{ $order->mobile }}" class="form-control" placeholder="Mobile">
                        @error('mobile')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Position:</strong>
                        <input type="text" name="position" value="{{ $order->position }}" class="form-control" placeholder="Position">
                        @error('position')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Position 2:</strong>
                        <input type="text" name="position2" value="{{ $order->position2 }}" class="form-control" placeholder="Position 2">
                        @error('position2')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary ml-3 mb-5" >Submit</button>
            </div>
        </form>
    </div>
    <x-footer />
</body>

</html>

@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
