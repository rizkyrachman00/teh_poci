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

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">

                            <h4 class="page-title">Selamat Datang! {{ auth()->user()->name }}</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-flat text-bg-pink">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="ri-eye-line widget-icon"></i>
                                </div>
                                <h6 class="text-uppercase mt-0" title="Customers">Varian Produk</h6>
                                <h2 class="my-2">{{ $productCount }}</h2>
                                <p class="mb-0">
                                    <span class="text-nowrap">Secara Keseluruhan</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-flat text-bg-info">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="ri-shopping-basket-line widget-icon"></i>
                                </div>
                                <h6 class="text-uppercase mt-0" title="Customers">Jumlah Pesanan</h6>
                                <h2 class="my-2">{{ $orderCount }}</h2>
                                <p class="mb-0">
                                    <span class="text-nowrap">Secara Keseluruhan</span>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-flat text-bg-purple">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="ri-wallet-2-line widget-icon"></i>
                                </div>
                                <h6 class="text-uppercase mt-0" title="Customers">Pendapatan</h6>
                                <h2 class="my-2">
                                    Rp. {{ rtrim(rtrim(number_format($totalRevenue, 2, ',', '.'), '0'), ',') }}</h2>
                                <p class="mb-0">
                                    <span class="text-nowrap">Secara Keseluruhan</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-flat text-bg-primary">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="ri-group-2-line widget-icon"></i>
                                </div>
                                <h6 class="text-uppercase mt-0" title="Customers">Pengguna</h6>
                                <h2 class="my-2">{{ $userCount }} orang</h2>
                                <p class="mb-0">
                                    <span class="text-nowrap">Secara Keseluruhan</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- ... (Cards for Revenue, Orders, and Users) ... -->

                </div>

                <div class="row">
                    <div class="col-12">
                        <section>
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
                                    @foreach ($orders as $order)
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
                            <br>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Teh Poci <b>Copyright</b>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function closeModal() {
            document.getElementById('myModal').style.display = 'none';
        }

        function addPromo() {
            // Implementasi logika untuk menambahkan promo
            alert('Promo has been added!');
            closeModal();
        }

        function editPromo() {
            // Implementasi logika untuk mengedit promo
            alert('Edit promo clicked!');
        }

        function deletePromo() {
            // Implementasi logika untuk menghapus promo
            alert('Delete promo clicked!');
        }
    </script>

    </div>

    </div>


    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- Daterangepicker js -->
    <script src="assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>

    <!-- Apex Charts js -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

    <!-- Vector Map js -->
    <script src="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Dashboard App js -->
    <script src="assets/js/pages/dashboard.js"></script>


    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

    <Script>
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
    </Script>

</body>

</html>
