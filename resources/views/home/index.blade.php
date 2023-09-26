@extends('layouts.tamplate')

@section('container')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="height: 800px;">
  
  {{-- <div class="container"> --}}
      
      {{-- <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>welcome to povshotnbk</h1>
          <h2>Accusantium quam, aliquam ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam, risus at semper. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum.</h2>
          <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/Group 1 (1).png" class="img-fluid" alt="">
        </div>
      </div>
    </div> --}}
    <div class="carousel" style=" width: 100%;">
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
  
      <div class="carousel-inner">
        <div class="carousel-item active c-item">
          <img src="{{ asset('assets/img/IMG_Sm_0158 (1).jpg') }}" class="d-block w-100 c-img" alt="Slide 1">
          <div class="carousel-caption top-0 mt-4" >
            <p class="mt-5 fs-3 text-uppercase p-margin" >Selamat Datang di</p>
            <p class="display-1 fw-bolder text-capitalize">POVSHOTNBK_</p>
            <a href="/galeri"><button class="btn btn-primary px-4 py-2 fs-5 mt-5">Cek Disini</button></a>
          </div>
        </div>
        <div class="carousel-item c-item">
          <img src="{{ asset('assets/img/IMG_Wed_37051.JPG') }}" class="d-block w-100 c-img" alt="Slide 2">
          <div class="carousel-caption top-0 mt-4">
            <p class="text-uppercase fs-3 mt-5 p-margin">Selamat Datang</p>
            <p class="display-1 fw-bolder text-capitalize">POVSHOTNBK_</p>
            <a href="/galeri"><button class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
              data-bs-target="#booking-modal">Cek Disini</button></a>
          </div>
        </div>
        <div class="carousel-item c-item">
          <img src="{{ asset('assets/img/315642963_136101422546865_2902915997318898928_n.jpg') }}" class="d-block w-100 c-img" alt="Slide 3">
          <div class="carousel-caption top-0 mt-4">
            <p class="text-uppercase fs-3 mt-5 p-margin">Selamat Datang di</p>
            <p class="display-1 fw-bolder text-capitalize">POVSHOTNBK_</p>
            <a href="/galeri"><button class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
              data-bs-target="#booking-modal">Cek Disini</button></a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  {{-- </div> --}}

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
   
    <!-- ======= Services Section ======= -->
   
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>New Photo</h2>
          <p>Berikut merupakan foto terbaru hasil hunting.</p>
        </div>


        <div class="row portfolio-container">

          @forelse ($product as $p)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img style="object-fit: cover" width="400px" height="300px" src="{{ asset('assets/image_watermark/'.$p->image_watermark) }}"  alt="">
              <div class="portfolio-info">
                <h4>{{ $p->title }}</h4>
                <p>{{ $p->description }}</p>
                <div class="portfolio-links">
                  <a href="{{ asset('assets/image_watermark/'.$p->image_watermark) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $p->title }}"><i class="bx bx-plus"></i></a>
                  <a href="/detail/{{ $p->id }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @empty
              
          @endforelse

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    

    <!-- ======= Team Section ======= -->

  

  </main><!-- End #main -->
  
@endsection