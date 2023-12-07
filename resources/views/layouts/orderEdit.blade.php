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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Order</title>
</head>

<body>
    @include('partials.navbar')
    <div class="container">
        <form action="{{ route('order.update', ['orderId' => $orderId]) }}" method="post">
            @csrf
            <h2> Pemesanan </h2>
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="row row-cols-3 row-cols-md-6 g-3">
                @foreach ($products as $product)
                    <div class="col">
                        <div class="card md-2" style="min-height: 400px;">
                            <div class="card-body">
                                <img src="/katalog/{{ $product->image }}" class="card-img-top me-2 md-2" alt="Product Image" style="max-width: 200px;">
                                <h5 class="card-title">{{ $product->manajemenProduct->nama_produk }}</h5>
                                <p class="card-text">Rp. {{ $product->price }} ,00</p>
                                <p class="card-text">{{ $product->description }}</p>
                                <div class="input-group">
                                    <button type="button" class="btn btn-success" onclick="tambahQuantity('{{ $product->id }}')">+</button>
                                    <input type="text" name="quantity{{ $product->id }}" id="quantity{{ $product->id }}" class="form-control text-center" >
                                    <button type="button" class="btn btn-warning" onclick="kurangQuantity('{{ $product->id }}')">-</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-success">Pesan</button>
        </form>
    </div>
    <script src="{{asset('js/script.js')}}"></script>
</body>


</html>
