@extends('layouts.tamplate')

@section('container')
<main id="main">
    {{-- <section>
        <div class="container-fluid mt-5 text-center">
            <h1>Galeri Photo</h1>
            <div class="container text-center me-5 px-5">
                <div class="row align-items-center">
                  @forelse($product as $p)
                  <div class="col-4 mt-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/image_watermark/'.$p->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->title }}</h5>
                            <p class="card-text">{{ $p->description }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                  </div>
                 @empty
  
                 @endforelse
                </div>
              </div>
           
        </div>
    </section> --}}
    <section id="team" class="team section-bg mt-5">
        <div class="container">
  
          <div class="section-title">
            <h2>Galeri Photo</h2>
           
          </div>
  
          <div class="row">
            @forelse($product as $p)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mb-3">
                <div class="card" style="width: 18rem;">
                    <img width="100px" height="200px" src="{{ asset('assets/image_watermark/'.$p->image_watermark) }}" class="card-img-top"  style="object-fit: cover" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->title }}</h5>
                        <p class="card-text" style="margin-bottom: 20px;"> {!! nl2br(e($p->description)) !!}</p>
                        <div class="button" style="margin-left: 180px; margin-bottom: 10px">
                        <a  href="/detail/{{ $p->id }}" class="btn btn-primary">Detail</a>
                      </div>
                    </div>
                </div>
            </div>
            @empty
  
            @endforelse
  
          </div>
  
        </div>
      </section>
</main>
@endsection