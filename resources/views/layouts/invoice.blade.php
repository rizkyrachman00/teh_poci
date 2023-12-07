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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>{{$title}}</title>
</head>
<body>
    @include('partials.navbar')
        <div class="container ">
            <h1>Invoice Pemesanan</h1>
            <div class="table-responsive">
                <h5>Order ID : {{$order->id}}</h5>
                @php
                    $tanggal = date('j F Y', strtotime($order->date));
                @endphp
                <h6>Tanggal Pembayaran : {{$tanggal}}</h6>
            <table class="table table-bordered table-hover allign-middle">
              <thead>
              <tr>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Subtotal</th>
              </tr>
            </thead>
    
            <tbody>
              @foreach($orderDetails as $orderDetail)
              <tr>
                <td>{{$orderDetail['name']}}</td>
                <td>Rp. {{rtrim(rtrim(number_format($orderDetail['price'], 2, ',', '.'), '0'), ',')}}</td>
                <td>{{$orderDetail['quantity']}}</td>
                <td>Rp. {{rtrim(rtrim(number_format($orderDetail['subtotal'], 2, ',', '.'), '0'), ',')}}</td>
              </tr>
              @endforeach
            </tbody>
            </table>
            <p>Status Pembayaran: <span style="color: {{ $order->status === 'paid' ? 'green' : 'red' }}">{{ $order->status }}</span></p>
            <p>Total Pembayaran: <strong>Rp. {{rtrim(rtrim(number_format($order->total_ammount, 2, ',', '.'), '0'), ',')}}</strong></p>
            <a href="{{route('home')}}" class="btn btn-success">Home</a>
            </div>
    </div>
    <script>document.getElementById('logout-link').addEventListener('click', function() {
        // Buat elemen formulir baru
        var form = document.createElement('form');
        form.action = "{{ route('auth.logout') }}";
        form.method = 'POST';
        document.body.appendChild(form);

        // Tambahkan token CSRF ke formulir
        var csrfToken = document.createElement('input');
        csrfToken.type = 'hidden';
        csrfToken.name = '_token';
        csrfToken.value = "{{ csrf_token() }}";
        form.appendChild(csrfToken);

        // Kirim formulir
        form.submit();
    });</script>
</body>
</html>