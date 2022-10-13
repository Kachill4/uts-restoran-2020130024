@extends('layout.master')
@section('title', 'Product')
@section('content')
<h1 class="cover-heading">Our Product!</h1>


    <div id="showbox-example" class="showbox"><div class="card-columns">
    <div class="card">
    <div class="card-body">
    <h4 class="card-title">Card title that wraps to a new line</h4>
    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    </div>
    <div class="card p-3">
    <blockquote class="card-body card-blockquote">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <footer>
    <small class="text-muted">
    Someone famous in <cite title="Source Title">Source Title</cite>
    </small>
    </footer>
    </blockquote>
    </div>
    <div class="card">
    <div class="card-body">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </div>
    <div class="card bg-primary text-white p-3 text-center">
    <blockquote class="card-blockquote">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
    <footer>
    <small>
    Someone famous in <cite title="Source Title">Source Title</cite>
    </small>
    </footer>
    </blockquote>
    </div>
    <div class="card text-center">
    <div class="card-body">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </div>
    <div class="card p-3 text-right">
    <blockquote class="card-blockquote">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <footer>
    <small class="text-muted">
    Someone famous in <cite title="Source Title">Source Title</cite>
    </small>
    </footer>
    </blockquote>
    </div>
    <div class="card">
    <div class="card-body">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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
