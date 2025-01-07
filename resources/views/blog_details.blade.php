<?php
header("X-Robots-Tag:index, follow");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="{{ asset('front/assets/images/icons.png') }}" type="image/x-icon">

 

  <meta name="author" content="John Doe">
 <meta name="robots" content="index, follow">

@if(isset($blog) && is_object($blog))
   <!-- Your custom meta tags go here -->
   <title>{!! $blog->meta_title !!}</title>
    <link rel="canonical" href="https://honeycombdeals.com/blog/{{ Str::slug($blog->title) }}">
        <meta name="description" content="{!! $blog->meta_description !!}">

 <meta name="keywords" content="{!! $blog->meta_keyword !!}">
@else
    <!-- Handle the case where $store is not valid -->
    <!-- You can display a default canonical URL or handle it in another appropriate way -->
    <link rel="canonical" href="https://honeycombdeals.com">
@endif

   <!-- Vendor CSS Files -->
   <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
   <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
   <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

 <!-- Main CSS File -->
 <link href="{{asset("assets/css/main.css")}}" rel="stylesheet">
 <style>
        .hero-contact {
        color: black;
        width: 100%;
        height: 100px;
        padding: 120px 0;
        display: flex;
        align-items: center;
        justify-content: center; /* Centers content horizontally */
        position: relative;
        object-fit: contain;
        background: url('{{ asset($blog->category_image) }}') no-repeat center center;
        background-size: cover; /* Ensures the image covers the section */
        overflow: hidden; /* Prevents any overflow issues */
    }
    
    .hero-contact::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)); /* Adds a gradient overlay */
        z-index: 1; /* Places the overlay beneath the content */
        pointer-events: none; /* Ensures the overlay doesn't block interactions with content */
    }
    
    .hero-contact > * {
        position: relative;
        z-index: 2; /* Ensures content appears above the overlay */
        text-align: center; /* Centers text content */
    }
    .blog-image{
        width: 1200px;
        height: auto;
    }
 </style>
</head>
<body>



<x-navbar/>
<br>
   <!-- Hero Section -->
   <section id="hero" class="hero-contact">
    <div class="container">
   <div class="">
    <h1>{{ $blog->title }}</h1>

   </div>
    </div>
  </section>
  <!-- /Hero Section -->
<div class="container">
    
<nav aria-label="breadcrumb" style="background-color: #f8f9fa; border-radius: 0.25rem; padding: 10px;">
<ol class="breadcrumb mb-0">
<li class="breadcrumb-item">
<a href="/" class="text-decoration-none text-dark" style="font-weight: 500;">Home</a>
</li>
<li class="breadcrumb-item " aria-current="page" style="font-weight: 600; color: #6c757d;">
    <a href="{{route('blog')}}" class="text-decoration-none text-dark" style="font-weight: 500;">Blog</a>
</li>
<li class="breadcrumb-item active" aria-current="page" style="font-weight: 600; color: #6c757d;">{{ $blog->title }}

</li>
</ol>
</nav>

<div class="row">
    <div class="col-md-12">
<div class="blog-post card shadow rounded-lg border border-light mb-4">
<img class=" blog-image img-thumbnail" src="{{ asset($blog->category_image) }}" alt="Blog Image" ><div class="card-body">
<h1 class="card-title text-3xl font-semibold text-gray-800 mb-4">{{ $blog->title }}</h1>
<p class="card-text text-gray-700 text-lg leading-relaxed">{!! $blog->content !!}</p>

</div>
</div>
      </div>
  




</div>

</div>

</div>

  <x-footer/>
    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  
    <!-- Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>


</body>
</html>
