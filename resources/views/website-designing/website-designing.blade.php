@extends('welcome')
@section('title','O.B.M TECH | Where Your Ideas Get a Digital Glow-Up!')
@section('description','On the hunt for a dependable digital wizard? Transform your online vibe with Alphaisoft’s web design, development, and SEO magic!')
@section('keywords','')
@section('main-content')
<div class="container py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/" class="text-decoration-none text-dark">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">portfolio</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold text-">Website Designing Services</h1>
            <p class="lead text-dark bg- p-3 rounded">
                Your website is the heart of your online presence. We craft stunning, user-friendly websites that leave a lasting impression.
            </p>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-6">
            <h2 class="h5 fw-bold text-">What We Offer</h2>
            <ul class="list-group">
                <li class="list-group-item bg- text-dark">Custom Website Design</li>
                <li class="list-group-item bg- text-dark">Responsive Design</li>
                <li class="list-group-item bg- text-dark">UI/UX Excellence</li>
                <li class="list-group-item bg- text-dark">SEO-Friendly Layouts</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h2 class="h5 fw-bold text-">Why Choose Us?</h2>
            <ul class="list-group">
                <li class="list-group-item bg- text-dark">Experienced professionals passionate about design</li>
                <li class="list-group-item bg- text-dark">Dedicated support and regular updates</li>
                <li class="list-group-item bg- text-dark">Fast turnaround times without compromising quality</li>
            </ul>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-12">
            <h2 class="h5 fw-bold text-">Our Process</h2>
            <ol class="list-group list-group-numbered">
                <li class="list-group-item bg- text-dark">Consultation & Ideation</li>
                <li class="list-group-item bg- text-dark">Wireframes & Mockups</li>
                <li class="list-group-item bg- text-dark">Development</li>
                <li class="list-group-item bg- text-dark">Launch & Beyond</li>
            </ol>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-6">
            <div class="p-4 bg- text-dark rounded shadow">
                <h3 class="fw-bold">Let’s Build Your Dream Website!</h3>
                <p>
                    Transform your ideas into a digital masterpiece. Let us create a website that showcases your brand's true potential.
                </p>
                <a href="{{ route('portfolio') }}" class="btn btn-light text- fw-bold">View Our Portfolio</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-4 bg- text-dark rounded shadow">
                <h3 class="fw-bold">Contact Us Today</h3>
                <p>
                    Ready to start? Get in touch with our experts and let us bring your vision to life.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-light text- fw-bold">Get Started</a>
            </div>
        </div>
    </div>
</div>
@endsection
