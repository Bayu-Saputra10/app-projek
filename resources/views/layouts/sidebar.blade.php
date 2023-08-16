<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Sidebar --}}
    <link href="css/dashboard.css" rel="stylesheet">

    {{-- Print --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css">

    {{-- Show --}}
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
    body{
      background-color: #00672b;
    }
  </style>
</head>
<body>

  <header class="navbar bg-dark sticky-top p-0 shadow-sm">
      <a class="p-2 text-decoration-none text-light" href="{{ url('/') }}">
        <img src="img/logo.png"> {{ config('app.name', 'Laravel') }}
    </a>
  </header>

  {{-- Sidebar --}}
      <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-lg-2 d-md-block sidebar collapse nav-pills bg-light">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link {{ request()->is('operator') ? 'active' : '' }}" aria-current="page" href="operator">
                    <i class="bi bi-house"></i> Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ request()->is('laporan') ? 'active' : '' }}" href="laporan">
                    <i class="bi bi-bookmarks-fill text-info"></i> Laporan
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ request()->is('setuju') ? 'active' : '' }}" href="setuju">
                    <i class="bi bi-bookmark-check-fill text-success"></i> Disetujui
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ request()->is('tolak') ? 'active' : '' }}" href="tolak">
                    <i class="bi bi-bookmark-x-fill text-danger"></i> Ditolak
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ request()->is('index') ? 'active' : '' }}" href="index">
                    <i class="bi bi-people-fill"></i> Pegawai
                  </a>
                </li>
              </ul>
      
                <hr>
                <ul class="nav flex-column mb-2">

                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-left"></i> {{ __('Login') }}</a>
                    </li>
                @endif

            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
          </nav>
          
        <main class="ms-sm-auto col-lg-10 px-md-4 mt-5 mb-5" id="content">
            @yield('content')
        </main>

      </div>
    </div>

    <footer id="footer" class="footer">
      <div class="container">
        <div class="row d-flex justify-content-between">
          <div class="footer-info col-lg-5">
            <a href="https://pt-palembang.go.id/" class="logo d-flex align-items-center text-decoration-none">
              <span>Pengadilan Tinggi Palembang</span>
            </a>
            <div class="social-links d-flex align-items-center">
              <a href="https://www.facebook.com/pengadilantinggi.palembang.1" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/pengadilan.tinggi.palembang/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCxSfzrorgZvtm14axWQiBXw" class="youtube"><i class="bi bi-youtube"></i></a>
              <a href="https://wa.me/628117873529" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
            </div>
          </div>
          <div class="footer-links col-lg-2 col-6 float-end">
            <h4>Alamat</h4>
            <ul>
              <li><a href="https://www.google.com/maps/place/High+Court+Palembang/@-2.9636756,104.7413827,17z/data=!3m1!4b1!4m6!3m5!1s0x2e3b75d10bd87639:0x8f27150bf27dd41!8m2!3d-2.9636756!4d104.7435714!16s%2Fg%2F1pv5_ts26?entry=ttu"><i class="bi bi-geo-alt"></i> Jalan Jendral Sudirman KM 3,5 Palembang</a></li>
              <li><a href="mailto:info@pt-palembang.go.id"><i class="bi bi-envelope"></i> info@pt-palembang.go.id</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Pengadilan Tinggi Palembang</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://instagram.com/kyf024?igshid=ZDc4ODBmNjlmNQ==" target="_blank">Bayu Saputra</a>
        </div>
      </div>   
    </footer>
    
    {{-- Print --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>

    <script>
      $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [
            {
                extend: 'pdf',
                messageTop: 'Data Pegawai',
                exportOptions: {
                  columns: ':not(.noPrint)',
                }
            },
            {
              extend: 'excel',
              messageTop: 'DataPegawai',
              exportOptions: {
                columns: ':not(.noPrint)'
              }
            }
        ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
    </script>

</body>
</html>
