@extends('welcome')
@section('title', 'O.B.M TECH | Creative Solutions & Cutting-Edge Innovations')
@section('description', 'O.B.M TECH presents in-depth project documentation! Explore our innovative and captivating creations that redefine the boundaries of creativity and technology.')
@section('keywords', 'Creative Agency | Technology Solutions | Innovative Services USA')
@section('robots', 'index, follow')

<style>
.hero-contact {
    color: white;
    width: 100%;
    min-height: 150px;
    padding: 120px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    background: url('{{ asset('images/blog/img-2.jpg') }}') no-repeat center center;
    background-size: cover;
    overflow: hidden;
}

.hero-contact::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4));
    z-index: 1;
    pointer-events: none;
}

.hero-contact > * {
    position: relative;
    z-index: 2;
    text-align: center;
}

.breadcrumb {
    background-color: #f8f9fa;
    padding: 10px 15px;
    border-radius: 0.25rem;
}

.blog-post img {
    border-radius: 0.25rem;
    margin-bottom: 15px;
}

.blog-post .post-content {
    padding: 10px 0;
}

.blog-post .btn {
    margin-top: 10px;
}

.pagination {
    justify-content: center;
}
</style>
@section('main-content')
<!-- Hero Section -->
<section id="hero" class="hero-contact">
    <div class="container">
        <h1>Creative Solutions & Cutting-Edge Innovations</h1>
    </div>
</section>
<!-- /Hero Section -->

<div class="container my-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/" class="text-decoration-none text-dark">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row">
        @foreach ($blogs as $blog)
        @php
        $blogurl = $blog->slug
        ? route('blog-details', ['slug' => Str::slug($blog->slug)])
        : '#';
        @endphp
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset($blog->category_image) }}" class="card-img-top" alt="Blog Post Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <p class="card-text">{{ Str::limit($blog->description, 100, '...') }}</p>
                    <a href="{{ $blogurl }}" class="btn btn-dark rounded-pill">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container my-4">
    {{ $blogs->links('vendor.pagination.bootstrap-5') }}
</div>
@endsection
