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
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
    <title>Order</title>
</head>

<body>
    @include('partials.navbar')
    <div class="container">
        
        <form action="{{ route('orderDetails') }}" method="post">
            @csrf

            <div class="row">
                <h2> Pemesanan </h2>
                @foreach ($products as $product)
                    <div class="col-md-3 m-3">
                        <div class="card" style="width: 18rem;">
                            <img src="/katalog/{{ $product->image }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">Rp. {{ $product->price }} ,00</p>
                                <p class="card-text">{{ $product->description }}</p>
                                <input type="text" name="quantity{{ $product->id }}"
                                    id="quantity{{ $product->id }}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Pesan</button>
        </form>
    </div>
</body>

</html>
