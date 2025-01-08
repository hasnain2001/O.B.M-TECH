@extends('welcome')
@section('title','O.B.M TECH | Where Your Ideas Get a Digital Glow-Up!')
@section('description','On the hunt for a dependable digital wizard? Transform your online vibe with Alphaisoft’s web design, development, and SEO magic!')
@section('keywords','')
@section('main-content')
<div class="container py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="/" class="text-decoration-none text-dark">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">WebP Application</li>
        </ol>
    </nav>

    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="display-5 fw-bold">WebP Application: Optimized and Modern Image Solutions</h1>
            <p class="lead">Explore how WebP can revolutionize your website’s performance with superior image compression and quality.</p>
        </div>
    </div>

    <div class="row g-4">
        <!-- Feature 1 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://www.gstatic.com/webp/gallery/1.jpg" class="card-img-top" alt="Efficient Compression">
                <div class="card-body">
                    <h5 class="card-title">Efficient Compression</h5>
                    <p class="card-text">Reduce your image sizes without compromising quality, speeding up your website’s load time.</p>
                </div>
            </div>
        </div>

        <!-- Feature 2 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://www.gstatic.com/webp/gallery/2.jpg" class="card-img-top" alt="Enhanced Quality">
                <div class="card-body">
                    <h5 class="card-title">Enhanced Quality</h5>
                    <p class="card-text">Deliver crisp, high-quality images that enhance user experience and visual appeal.</p>
                </div>
            </div>
        </div>

        <!-- Feature 3 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://www.gstatic.com/webp/gallery/3.jpg" class="card-img-top" alt="Cross-Browser Support">
                <div class="card-body">
                    <h5 class="card-title">Cross-Browser Support</h5>
                    <p class="card-text">Ensure seamless compatibility across major browsers with WebP image formats.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 text-center">
            <h2 class="fw-bold">Why Choose WebP for Your Applications?</h2>
            <p class="text-muted">WebP offers a perfect balance of quality and performance, making it the ideal choice for modern web development.</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <img src="https://www.gstatic.com/webp/gallery/4.jpg" class="img-fluid rounded shadow-sm" alt="WebP Example">
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <div>
                <h3>Fast, Reliable, and Future-Ready</h3>
                <p>WebP images are up to 30% smaller than JPEG or PNG, ensuring faster load times and reduced bandwidth usage.</p>
                <ul>
                    <li>Save storage space and bandwidth.</li>
                    <li>Deliver superior image quality.</li>
                    <li>Improve SEO rankings with optimized performance.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
    