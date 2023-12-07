<style>
    .menu {
        position: relative;
    }

    .popup {
        display: none;
        position: absolute;
        top: 40px;
        /* Adjust this value based on your layout */
        right: 0;
        padding: 10px;
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        /* Ensure the popup is above other elements */
        margin-right: 100px;
        margin-top: 20px;
    }

    .button-dashboard {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        background-color: #4CAF50;
        /* Warna latar belakang */
        color: white;
        /* Warna teks */
        border-radius: 5px;
        /* Sudut border */
        transition: background-color 0.3s ease;
        /* Animasi perubahan warna latar belakang */
    }

    /* Hover effect */
    .button-dashboard:hover {
        background-color: #45a049;
        /* Warna latar belakang saat hover */
        color: white;
        /* Warna teks saat hover */
    }
</style>
<nav>
    <div class="container">
        <div class="logo">
            <a href="#"><img src="{{ asset('asset-img/logo-poci.png') }}" alt=""></a>
            <div class="logo-item">
                <span class="title-1">Teh Poci</span> <br>
                <span class="title-2">Teh Indonesia</span>
            </div>
        </div>
        <div class="menu">
            <a class="menu-item" href="#">Home</a>
            <a class="menu-item" href="#">Ingredient</a>
            <a class="menu-item" href="#">Order</a>
            <a class="menu-item" href="#">Contact</a>
            <a class="menu-item" href="#">About</a>
        </div>

        <div class="ctas">
            @auth
                {{-- <div class="" style="margin-bottom:-30px;"> --}}
                <img src="{{ asset('picture/accounts/' . auth()->user()->gambar) }}" alt="" width="40px"
                    style="border-radius: 50%;margin-right:-40px">
                <a href="#" id="user-name" class="menu-item">Hai, {{ auth()->user()->name }}</a>
                {{-- </div> --}}
            @endauth


            <a href="#"><img src="{{ asset('asset-img/shopping-cart.png') }}" alt=""></a>
            @auth
                {{-- <form action="{{route('auth.logout')}}" method="post">
            <a href="{{ url('/logout') }}"><img src="{{ asset('asset-img/pintu-keluar.png') }}" alt=""></a>
            @csrf
            </form> --}}
                <a href="#" id="logout-link"><img src="{{ asset('asset-img/pintu-keluar.png') }}" alt=""></a>
            @else
                <a href="{{ url('/login') }}"><img src="{{ asset('asset-img/pintuk-masuk.png') }}" alt=""></a>
            @endauth



        </div>

    </div>
</nav>
{{-- popup --}}
@auth
    <div class="popup" id="popup">
        <!-- Your popup content goes here -->
        <!-- For example, you can show user details or links -->
        <p>Hello, {{ auth()->user()->name }}!</p>
        @if (auth()->user()->role == 'admin')
            <a class="button-dashboard" href="{{ route('dashboard.index') }}">Dashboard</a>
        @endif
        {{-- <form action="{{route('auth.logout')}}" method="post">
        @csrf
    <button class="buy-now-button" type="submit">Logout</button>
</form> --}}
        <!-- Add any other content you want to display -->
    </div>
@endauth
