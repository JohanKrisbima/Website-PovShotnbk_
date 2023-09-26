@extends('layouts.tamplate')

@section('container')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Photo Details</h2>
          <ol>
            <li><a href="/home">Home</a></li>
            <li>Photo Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img style="object-fit: cover" width="400px" height="700px" src="{{ asset('assets/image_watermark/'.$product->image_watermark) }}" alt="gak ada foto">
                </div>

                {{-- <div class="swiper-slide">
                  <img src="assets/image_upload/foto4jpeg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/image_upload/foto4jpeg" alt="">
                </div> --}}

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Photo information</h3>
              <ul>
                {{-- <form action="/cart/{{ $product->id }}" method="POST"> --}}
                  {{-- @csrf --}}
                {{-- <input type="hidden" value="1" name="quantity">   --}}
                <li><strong>Judul</strong>: {{ $product->title }}</li>
                <li><strong>Description</strong>: {!! nl2br(e($product->description)) !!}</li>
                <li><strong>Price</strong>: Rp.{{ number_format($product->price )}}</li>
                <br>
                <a href="/checkout/{{ $product->id }}"><li><input type="submit" class="btn btn-primary" value="Check Out"></li></a>
              {{-- </form> --}}
              </ul>
            </div>
            {{-- <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
            </div>
          </div> --}}

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

@endsection


