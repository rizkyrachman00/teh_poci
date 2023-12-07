@include('Admin.partials.layouts.head')

<body>

    <div class="wrapper">

        {{-- navbar start --}}
        @include('Admin.partials.navbar')
        {{-- navbar end --}}

        {{-- sidebar start --}}
        @include('Admin.partials.sidebar')
        {{-- sidebar end --}}

        <div class="content-page">
          <h1>Halaman Pemesanan</h1>
          <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Tanggal Pemesanan</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Metode Pembayaran</th>
                    <th class="text-center">Jumlah Pembelian</th>
                    <th class="text-center">Jumlah Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderDetails as $order)
                    <tr>
                        <td class="text-center">{{ $order->date }}</td>
                        <td class="text-center">{{ $order->status }}</td>
                        <td class="text-center">{{ $order->payment_method }}</td>
                        <td class="text-center">{{ $order->total_quantity }}</td>
                        <td class="text-center">Rp.
                            {{ rtrim(rtrim(number_format($order->total_ammount, 2, ',', '.'), '0'), ',') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>


    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>
</body>
