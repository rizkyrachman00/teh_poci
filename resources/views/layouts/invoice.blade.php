<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/modern-normalize@2.0.0/modern-normalize.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style-main.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
    <title>{{$title}}</title>
</head>
<body>
    @include('partials.navbar')
    <div class="container">
        <h2>
            Invoice Pemesanan
        </h2>
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5>Order Id: {{$order->id}}</h5>
                        <p>Item Detail</p>
                        @foreach($orderDetails as $orderDetail)
                        <p>{{$orderDetail['name']}} {{$orderDetail['quantity']}}x : Rp.{{rtrim(rtrim(number_format($orderDetail['subtotal'], 2, ',', '.'), '0'), ',')}}</p>    
                        @endforeach
                        <p>Total Pembayaran: Rp.{{rtrim(rtrim(number_format($order->total_ammount, 2, ',', '.'), '0'), ',')}}</p>
                        <p>Status Pembayaran: {{$order->status}}</p>
                    </div>
                </div>
            <a href="{{route('home')}}" class="btn btn-primary">Home</a>
        </form>
    </div>
</body>
</html>