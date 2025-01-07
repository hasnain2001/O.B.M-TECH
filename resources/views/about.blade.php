@extends('welcome')
@section('title', 'O.B.M TECH | Digital Solutions That Elevate Your Business')
@section('description', 'O.B.M TECH specializes in affiliate marketing, digital marketing, graphic design, and website development to transform your business online.')
@section('keywords', 'affiliate marketing, digital marketing, graphic design, website development')

@section('main-content')
<div class="container py-5" style="background-color: #fff;">
    <!-- Introduction Section -->
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-primary">Welcome to O.B.M TECH</h1>
        <p class="lead text-dark">Innovative Solutions for Businesses Seeking Growth</p>
    </div>

    <!-- Services Section -->
    <div class="row text-center">
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="mb-3">
                        <i class="fas fa-chart-line fa-3x text-primary"></i>
                    </div>
                    <h5 class="card-title fw-bold text-dark">Affiliate Marketing</h5>
                    <p class="card-text text-muted">
                        Drive traffic and maximize revenue with our strategic affiliate marketing services. 
                        We connect you with the right partners to expand your reach.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="mb-3">
                        <i class="fas fa-bullhorn fa-3x text-primary"></i>
                    </div>
                    <h5 class="card-title fw-bold text-dark">Digital Marketing</h5>
                    <p class="card-text text-muted">
                        Stay ahead of the competition with tailored digital marketing strategies, 
                        including social media management, SEO, and paid advertising.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="mb-3">
                        <i class="fas fa-paint-brush fa-3x text-primary"></i>
                    </div>
                    <h5 class="card-title fw-bold text-dark">Graphic Design</h5>
                    <p class="card-text text-muted">
                        Captivate your audience with stunning visuals and professional designs that
                        reflect your brand's identity and message.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h5 class="card-title fw-bold text-dark">Website Development</h5>
                    <p class="card-text text-muted">
                        From idea to launch, we build responsive and user-friendly websites tailored to your business needs.
                        Let us bring your vision to life!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call-to-Action Section -->
    <div class="text-center mt-5">
        <h2 class="fw-bold text-dark">Ready to Elevate Your Business?</h2>
        <p class="lead text-muted">Let’s collaborate and make something amazing together.</p>
        <a href="{{route('contact')}}" class="btn btn-primary btn-lg"><i class="fas fa-handshake"></i> Get Started Today</a>
    </div>
</div>
@endsection
