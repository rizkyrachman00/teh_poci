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
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">

                                <h4 class="page-title">Selamat Datang! {{ auth()->user()->name }}</h4>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <section>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Role</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $pelanggan)
                                            <tr>
                                                <td class="text-center">{{ $pelanggan->name }}</td>
                                                <td class="text-center">{{ $pelanggan->email }}</td>
                                                <td class="text-center">{{ $pelanggan->role }}</td>
                                                <td class="text-center"><button type="submit"
                                                        class="btn btn-danger btn-sm">Delete</button>
                                                </td>


                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <br>
                            </section>
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


                    <!-- ============================================================== -->
                    <!-- End Page content -->
                </div>

            </div>

            <!-- Vendor js -->
            <script src="assets/js/vendor.min.js"></script>

            <!-- Datatables js -->
            <script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
            <script src="assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
            <script src="assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
            <script src="assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
            <script src="assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
            <script src="assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
            <script src="assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
            <script src="assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
            <script src="assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
            <script src="assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
            <script src="assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

            <!-- Datatable Demo Aapp js -->
            <script src="assets/js/pages/datatable.init.js"></script>

            <!-- App js -->
            <script src="assets/js/app.min.js"></script>
</body>
