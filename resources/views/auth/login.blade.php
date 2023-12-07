<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
    <meta content="Techzaa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg position-relative">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
           
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="asset-img/login-page.jpg" alt="" class="img-fluid rounded h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    
                                    <div class="p-4 my-auto">


                                        {{--  --}}
                                        @if(Session::has('danger'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ Session::get('danger') }}
                                        </div>
                                    @endif
                                    
                                         {{--  --}}
            @if(Session::get('success'))
            <div class="alert alert-success" role="alert">
               <ul>
                <li>{{Session::get('success')}}</li>
               </ul>
              </div>
            @endif
                        {{--  --}}
                        {{--  --}}
                                        <h4 class="fs-20">Login</h4>
                                        <p class="text-muted mb-3">Masukkan Email Anda.
                                        </p>

                                        <!-- form -->
                                        <form action="{{route('auth.login')}}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="emailaddress" class="form-label">Email Anda</label>
                                                <input class="form-control" type="email" id="emailaddress" name="email" name="email">
                                                @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            </div>
                                            <div class="mb-3">
                                                <a href="{{route('auth.forgot')}}" class="text-muted float-end"><small>Lupa   Password</small></a>
                                                <br>
                                                 <a href="{{route('register')}}" class="text-muted float-end"><small>Buat Akun Baru</small></a>
                                                <label for="password" class="form-label">Password</label>
                                                <input class="form-control" type="password"  id="password"
                                                    placeholder="Enter your password" name="password">
                                                    @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                           
                                            <div class="mb-0 text-start">
                                                <button class="btn btn-soft-primary w-100" type="submit"><i
                                                        class="ri-login-circle-fill me-1"></i> <span class="fw-bold">Log
                                                        In</span> </button>
                                            </div>

                                            
                                        </form>
                                        <br>
                                         {{-- <a class="btn btn-danger" href="{{ '/auth/redirect'}}">google</a> --}}
                                        <!-- end form-->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
          
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark">
            <script>document.write(new Date().getFullYear())</script> © Kelompok 9
        </span>
    </footer>
    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>