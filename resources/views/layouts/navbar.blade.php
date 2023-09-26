

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo"><img src="{{ asset('assets/img/povshot.png') }}" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ ($title ==='Menu Utama') ? 'active' : ''}}" href="/home">Home</a></li>
          <li><a class="nav-link scrollto {{ ($title ==='Galeri Photo') ? 'active' : ''}}" href="/galeri">Galeri</a></li>
          {{-- <li><a class="nav-link scrollto {{ ($title ==='About') ? 'active' : ''}}" href="/about">About</a></li> --}}
          {{-- <li><a class="nav-link scrollto {{ ($title ==='Cart') ? 'active' : ''}}" href="/show_cart">Cart</a></li> --}}
    
        @if (Auth::check())
        <li class="dropdown"><a href="#"><span>Welcome back, {{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/history">History</a></li>
              <form action="/logout" method="POST">
                @csrf
                  <a href=""><button type="submit" class="dropdown-item">Logout</button></a>
              </form>
            </ul>
          </li>
        @else
        <a href="/login" class="btn-get-started scrollto">login</a>
        @endif
    
         
    
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->