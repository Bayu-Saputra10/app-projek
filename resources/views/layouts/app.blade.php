<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Pagination --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        /* Image Header */
        a img{
            width: 39px;
        }
        
        /* Footer */
        .footer {
            font-size: 14px;
            background-color: #212529;
            padding: 50px 0;
            color: white;
            height: 270px;
        }

        .footer .footer-info .logo {
            line-height: 0;
            margin-bottom: 25px;
        }

        .footer .footer-info .logo img {
            max-height: 40px;
            margin-right: 6px;
        }

        .footer .footer-info .logo span {
            font-size: 30px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #fff;
        }

        .footer .footer-info p {
            font-size: 14px;
        }

        .footer .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 16px;
            color: rgba(255, 255, 255, 0.7);
            margin-right: 10px;
            transition: 0.3s;
        }

        .footer .social-links a:hover {
            color: #fff;
            border-color: #fff;
        }

        .footer h4 {
            font-size: 16px;
            font-weight: bold;
            position: relative;
            padding-bottom: 12px;
        }

        .footer .footer-links {
            margin-bottom: 30px;
        }

        .footer .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer .footer-links ul i {
            padding-right: 2px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 12px;
            line-height: 0;
        }

        .footer .footer-links ul li {
            padding: 10px 0;
            display: flex;
            align-items: center;
        }

        .footer .footer-links ul li:first-child {
            padding-top: 0;
        }

        .footer .footer-links ul a {
            color: rgba(255, 255, 255, 0.7);
            transition: 0.3s;
            display: inline-block;
            line-height: 1;
            text-decoration: none;
        }

        .footer .footer-links ul a:hover {
            color: #fff;
        }

        .footer .footer-contact p {
            line-height: 26px;
        }

        .footer .copyright {
            text-align: center;
        }

        .footer .credits {
            padding-top: 4px;
            margin-bottom: 1px;
            text-align: center;
            font-size: 13px;
        }

        .footer .credits a {
            color: #fff;
        }
    </style>

    @livewireStyles
    @livewireScripts

</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-md shadow-sm sticky-top" style="background-color: #00672b;">
            <div class="container">
                <a class="navbar-brand text-light" href="{{ url('/') }}">
                    <img src="img/logo.png"> {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                          
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-left"></i> {{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}"><i class="bi bi-box-arrow-in-left"></i> {{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('operator') }}">
                                        {{ __('Dashboard') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        <main class="py-4 mb-3">
            @yield('content')
        </main>

    </div>

    <footer id="footer" class="footer">
        <div class="container">
          <div class="row d-flex justify-content-between">
            <div class="footer-info col-lg-5">
              <a href="https://pt-palembang.go.id/" class="logo d-flex align-items-center text-decoration-none">
                <span>Pengadilan Tinggi Palembang</span>
              </a>
              <div class="social-links d-flex align-items-center">
                <a href="https://www.facebook.com/pengadilantinggi.palembang.1" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/pengadilan.tinggi.palembang/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCxSfzrorgZvtm14axWQiBXw" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
                <a href="https://wa.me/628117873529" target="_blank" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
            <div class="footer-links col-lg-2 col-6 float-end">
              <h4>Alamat</h4>
              <ul>
                <li><a href="https://www.google.com/maps/place/High+Court+Palembang/@-2.9636756,104.7413827,17z/data=!3m1!4b1!4m6!3m5!1s0x2e3b75d10bd87639:0x8f27150bf27dd41!8m2!3d-2.9636756!4d104.7435714!16s%2Fg%2F1pv5_ts26?entry=ttu" target="_blank"><i class="bi bi-geo-alt"></i> Jalan Jendral Sudirman KM 3,5 Palembang</a></li>
                <li><a href="mailto:info@pt-palembang.go.id" target="_blank"><i class="bi bi-envelope"></i> info@pt-palembang.go.id</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>Pengadilan Tinggi Palembang</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by <a href="https://instagram.com/kyf024?igshid=ZDc4ODBmNjlmNQ==">Bayu Saputra</a>
          </div>
        </div>   
      </footer>
    
    {{-- Pagination --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
      $(document).ready(function () {
    $('#example').DataTable();
});
    </script>

</body>
</html>