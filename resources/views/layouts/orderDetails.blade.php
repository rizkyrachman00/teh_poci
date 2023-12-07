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
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-IaiXkywEVH1Ck1kk"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <title>OrderDetails</title>
</head>
<body>
    @include('partials.navbar')
    <div class="container ">
        <h1>Detail Pesanan</h1>
        <a href="{{ route('order.edit', ['orderId' => $orderId]) }}" class="btn btn-warning mb-2">Edit Pesanan</a>
        <div class="table-responsive">
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
        </div>
                <h5>
                    Total Pembayaran Rp. {{rtrim(rtrim(number_format($totalAmmount, 2, ',', '.'), '0'), ',')}}
                </h5>
                <button type="submit" id="pay-button" class="btn btn-success">Bayar</button>
                <script type="text/javascript">
                    // For example trigger on button clicked, or any time you need
                    var payButton = document.getElementById('pay-button');
                    payButton.addEventListener('click', function () {
                      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                      window.snap.pay('{{ $snap_token }}', {
                        onSuccess: function(result){
                          /* You may add your own implementation here */
                          window.location = '/order/invoice/{{ $orderId }}';
                          alert("payment success!"); console.log(result);
                        },
                        onPending: function(result){
                          /* You may add your own implementation here */
                          alert("wating your payment!"); console.log(result);
                        },
                        onError: function(result){
                          /* You may add your own implementation here */
                          alert("payment failed!"); console.log(result);
                        },
                        onClose: function(){
                          /* You may add your own implementation here */
                          alert('you closed the popup without finishing the payment');
                        }
                      })
                    });

                    document.getElementById('logout-link').addEventListener('click', function() {
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
                });
                  </script>
                  {{-- <script src="{{asset('js/script.js')}}"></script> --}}
  </div>
</body>
</html>