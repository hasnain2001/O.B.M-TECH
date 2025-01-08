@extends('welcome')
@section('title', 'O.B.M TECH | Custom Web Development Packages')
@section('main-content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-6 fw-bold">Custom Website Development</h1>
        <p class="lead">Unlock your brand’s potential with our custom website development services. At Alpha AI Solutions, we design and build bespoke websites tailored to your unique needs, ensuring a perfect blend of style, functionality, and performance.</p>
    </div>
    
    <!-- Packages Section -->
    <div class="row g-4">
        @foreach ([
            ['Special Package', 244, 488, ['1 Page Website Design', 'HTML Based', 'Contact Us Form']],
            ['Classic Package', 394, 788, ['1 Page Website Design', 'HTML Based', 'Contact Us Form']],
            ['Unlimited Package', 819, 1639, ['Up to 5 Pages Website Design', 'Stock Photos']],
            ['Elite Website Package', 1399, 2799, ['Up to 15 Pages Website Design', 'Custom WordPress Development']],
            ['Identity Website Package', 1799, 3599, ['Custom Interactive Design', 'Complete Deployment']],
            ['Corporate Website Package', 3399, 6799, ['Up to 25 Pages Website Design', 'Dynamic Web Solutions']]
        ] as $package)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">{{ $package[0] }}</h5>
                    <p class="text-primary display-6 fw-bold">${{ $package[1] }}.00 <span class="text-muted"><del>${{ $package[2] }}.00</del></span></p>
                    <ul class="list-unstyled text-start">
                        @foreach ($package[3] as $feature)
                        <li>• {{ $feature }}</li>
                        @endforeach
                    </ul>
                    <button class="btn btn-primary mt-3">Get Started</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <!-- Repeat for E-Commerce Website -->
    <div class="text-center my-5">
        <h4 class="display-7 fw-bold">E-Commerce Website</h4>
        <p class="lead">Transform your online store with Alpha AI Solutions. Our e-commerce solutions deliver a seamless shopping experience, featuring intuitive navigation, secure transactions, and sleek design.</p>
    </div>
    
    <!-- Repeat for Web Design Development -->
    <div class="text-center my-5">
        <h4 class="display- fw-bold">Web Design Development</h4>
        <p class="lead">Elevate your brand with a website designed to captivate and convert. From concept to launch, we ensure your online presence is visually stunning, functional, and tailored to your unique needs.</p>
    </div>
</div>
@endsection
