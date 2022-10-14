@extends('layout.master')
@section('title', 'Product')
@section('content')

<h1 class="cover-heading">Our Product!</h1>
<div class="container">
  <div class="row">

    <div class="col-6 col-md-4 mb-3 mx-auto">
      <div class="card card-rounded">
        <div class="card-body d-flex flex-column text-center">
          <img src="images/miso.jpeg" class="img-fluid rounded" loading="lazy" alt="menu 1">
            <p class="card-header mt-3 mb-0">Miso Kampung Ori</p>
            <p class="card-text mb-auto" >Mie kuning, Bihun medan, Ayam suwir, Kuah miso khas Medan, Kerupuk [bisa custom topping loh]</p>
            <p class="card-text text-hokben-red my-3">Rp 20.000</p>
            <a class="btn" href="https://gofood.link/a/EzPDTfd">+ Order</a>
        </div>
      </div>
    </div>

    <div class="col-6 col-md-4 mb-3 mx-auto">
        <div class="card card-rounded">
          <div class="card-body d-flex flex-column text-center">
            <img src="images/mpangsit.jpeg" class="img-fluid rounded" loading="lazy" alt="menu 1">
              <p class="card-header mt-3 mb-0">Mie Pangsit Medan</p>
              <p class="card-text mb-auto" >Mie Yamien bumbu Medan, Daging ayam cincang kecap,
                Daging ayam panggang merah + pangsit(2) + Kuah</p>
              <p class="card-text text-hokben-red my-3">Rp 35.000</p>
              <a class="btn" href="https://gofood.link/a/EzPDTfd">+ Order</a>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 mb-3 mx-auto">
        <div class="card card-rounded">
          <div class="card-body d-flex flex-column text-center">
            <img src="images/mpgoreng.jpeg" class="img-fluid rounded" loading="lazy" alt="menu 1">
              <p class="card-header mt-3 mb-0">Mie Pangsit Goreng</p>
              <p class="card-text mb-auto" >Mie Goreng pangsit khas Medan dengan sayuran dan daging ayam panggang merah</p>
              <p class="card-text text-hokben-red my-3">Rp 35.000</p>
              <a class="btn" href="https://gofood.link/a/EzPDTfd">+ Order</a>
          </div>
        </div>
      </div>

  </div>
</div>


<div id="demo" class="carousel slide" data-ride="carousel">
    {{-- Indikator carousel --}}
    <ul class="carousel-indicators">
        @forelse ($carousels as $key => $carousel)
            <li data-target="#demo"
            data-slide-to="{{ $key }}"
            class="{{ $key==0? 'active':'' }}"></li>
        @empty
            <li data-target="#demo" data-slide-to="0" class="active">
        @endforelse
    </ul>
    {{-- Carousel content --}}
    <div class="carousel-inner">
        @forelse ($carousels as $key => $carousel)
            <div class="carousel-item {{ $key==0? 'active':'' }}">
                <img src="{{ $carousel['url'] }}"
                width="{{ $carousel['width'] }}"
                height="{{ $carousel['height'] }}">
            </div>
        @empty
            ty
            <div class="carousel-item active">
                <img src="https://placekitten.com/900/300"
                alt="Placeholder" width="900" height="300">
            </div>
        @endforelse
    </div>
    {{-- Carousel button --}}
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    </a>
</div>
@endsection
