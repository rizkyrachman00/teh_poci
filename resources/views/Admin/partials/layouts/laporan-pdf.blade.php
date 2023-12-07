@include('Admin.partials.layouts.head')

<body>
    <div class="wrapper">
        <div class="content-page">
            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Data Tables</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        margin: 0;
                        padding: 0;
                        background-color: #f4f4f4;
                    }

                    header {
                        background-color: #333;
                        color: white;
                        text-align: center;
                        padding: 1em;
                    }

                    section {
                        margin: 20px;
                    }

                    table {
                        width: 100%;
                        border-collapse: collapse;
                        margin-top: 20px;
                    }

                    th,
                    td {
                        border: 1px solid #ddd;
                        padding: 8px;
                        text-align: left;
                    }

                    th {
                        background-color: #333;
                        color: white;
                    }

                    .total-row {
                        font-weight: bold;
                    }

                    .print-btn {
                        background-color: #4CAF50;
                        color: white;
                        padding: 10px 20px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        margin-bottom: 20px;
                        cursor: pointer;
                    }

                    form {
                        margin-bottom: 20px;
                    }

                    form label {
                        margin-right: 10px;
                    }

                    form input {
                        padding: 5px;
                    }

                    form button {
                        padding: 8px;
                        background-color: #333;
                        color: white;
                        border: none;
                        cursor: pointer;
                    }
                </style>

                <body>
                    <header>
                        <h1>Laporan Transaksi Pemesanan Teh Poci</h1>
                    </header>

                    <section>
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Pesanan</th>
                                    <th>Tgl Pesanan</th>
                                    <th>Nama Member</th>
                                    <th>Metode Bayar</th>
                                    <th>Status Bayar</th>
                                    <th>Total Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                            @endphp
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$order->id}}</td>
                                <td>
                                    @php
                                        $tanggal = date('j F Y', strtotime($order->date));
                                    @endphp
                                    {{$tanggal}}
                                </td>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->payment_method}}</td>
                                <td>{{$order->status}}</td>
                                <td>Rp. {{rtrim(rtrim(number_format($order->total_ammount, 2, ',', '.'), '0'), ',')}}</td>
                            </tr>
                            @endforeach
                            <!-- Data transaksi lainnya -->
                            </tbody>
                            <tfoot>
                                <tr class=" total-row">
                                <td colspan="6">Total</td>
                                <td>Rp {{rtrim(rtrim(number_format($orderSumAmmount, 2, ',', '.'), '0'), ',')}}</td>
                                </tr>
                                </tfoot>
                                </table>
                    </section>

                    <script>
                        function tampilkanLaporan() {
                            // Logika untuk menampilkan laporan
                            alert('Menampilkan laporan...');
                        }

                        function cetakLaporan() {
                            // Logika untuk mencetak laporan
                            alert('Mencetak laporan...');
                        }
                    </script>

                    <!-- ============================================================== -->
                    <!-- End Page content -->
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
</body>