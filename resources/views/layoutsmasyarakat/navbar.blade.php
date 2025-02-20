  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">PENGADU</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#featured-services">Information</a></li>
          <li><a class="nav-link scrollto" href="#pengaduan">Pengaduan</a></li>
          <li>
              <div class="p-2">
            @if(Auth::check())
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="nav-link scrollto" style="background: none; border: none; cursor: pointer;">
                        Logout
                    </button>
                </form>
            @else
                <a class="nav-link scrollto" href="{{ route('login') }}">Login</a>
            @endif
            </div>
        </li>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
