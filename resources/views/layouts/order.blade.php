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
    {{-- <style>
       .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.card {
    width: 30%; /* Sesuaikan lebar kartu sesuai kebutuhan */
    margin-bottom: 20px;
    box-sizing: border-box;
}



        .card img {
            height: 200px;
            object-fit: cover;
        }

        .order-input {
            width: 100%;
            margin-top: 10px;
        }
    </style> --}}
</head>

<body>
    @include('partials.navbar')
    <div class="container">
        <form action="{{ route('orderDetails') }}" method="post">
            @csrf
            <h2> Pemesanan </h2>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-2 m-2">
                        <div class="card" style="max-width: 300px; height: 400px;">
                            <img src="/katalog/{{ $product->image }}" class="card-img-top mr-2" alt="..." style="max-width: 180px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->manajemenProduct->nama_produk }}</h5>
                                <p class="card-text">Rp. {{ $product->price }} ,00</p>
                                <p class="card-text">{{ $product->description }}</p>
                                {{-- <input type="text" name="quantity{{ $product->id }}" id="quantity{{ $product->id }}" class="form-control">
                                 --}}
                                 <div class="input-group">
                                        <button type="button" class="btn btn-success" onclick="tambahQuantity('{{ $product->id }}')">+</button>
                                        <input type="text" name="quantity{{ $product->id }}" id="quantity{{ $product->id }}" class="form-control text-center">
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
