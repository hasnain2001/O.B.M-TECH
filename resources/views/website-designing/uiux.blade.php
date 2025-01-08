@extends('welcome')
@section('title', 'O.B.M Tech | Exceptional UI/UX Design Solutions')
@section('description', 'Elevate your digital presence with O.B.M Tech’s transformative UI/UX design solutions, crafted to create intuitive and memorable user experiences.')
@section('keywords', 'UI Design, UX Design, O.B.M Tech, User Experience, Digital Design Agency')
@section('main-content')
<div class="container py-5">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/" class="text-decoration-none text-dark">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">UI  UX Design</li>
        </ol>
    </nav>

    <!-- Section: UI/UX Design -->
    <div class="row align-items-center py-5">
        <div class="col-lg-6">
            <h1 class="fw-bold text-primary">UI/UX Design Services</h1>
            <p class="text-muted">
                At O.B.M Tech, we believe that great design begins with understanding users' needs and behaviors. Our UI/UX design services are tailored to deliver intuitive and visually appealing digital experiences that leave a lasting impression. 
            </p>
            <a href="#contact" class="btn btn-primary">Get Started</a>
        </div>
        <div class="col-lg-6 text-center">
            <img src="your-image-path.jpg" alt="UI/UX Design" class="img-fluid rounded">
        </div>
    </div>

    <!-- Section: Transformative Experiences -->
    <div class="row py-5">
        <div class="col-lg-6">
            <img src="your-image-path.jpg" alt="Transformative Experiences" class="img-fluid rounded">
        </div>
        <div class="col-lg-6">
            <h2 class="fw-bold text-primary">Transformative Digital Experiences</h2>
            <p class="text-muted">
                Our designs guide users through a seamless journey, from curiosity to delight. By prioritizing user needs and creating intuitive interfaces, we ensure that your brand delivers value and builds trust with every interaction.
            </p>
        </div>
    </div>

    <!-- Section: Creative Excellence -->
    <div class="row py-5">
        <div class="col-lg-12 text-center">
            <h2 class="fw-bold text-primary">Creative Excellence in Every Design</h2>
            <p class="text-muted">
                We push boundaries to deliver unique and impactful UI/UX designs that resonate with your audience. From wireframes to high-fidelity prototypes, we ensure your vision comes to life in the most compelling way.
            </p>
        </div>
    </div>

    <!-- Section: Mobile App Design -->
    <div class="row py-5">
        <div class="col-lg-6">
            <h2 class="fw-bold text-primary">Mobile App Design</h2>
            <p class="text-muted">
                With the rise of mobile-first interactions, O.B.M Tech crafts mobile app designs that are not only visually appealing but also seamlessly integrate into your users' daily lives.
            </p>
        </div>
        <div class="col-lg-6 text-center">
            <img src="your-image-path.jpg" alt="Mobile App Design" class="img-fluid rounded">
        </div>
    </div>

    <!-- Section: Services -->
    <div class="row py-5">
        <div class="col-md-4">
            <h3 class="fw-bold text-primary">Web Interface Design</h3>
            <p class="text-muted">
                Our web interface designs are crafted to deliver engaging and user-friendly experiences that align with your brand’s identity.
            </p>
        </div>
        <div class="col-md-4">
            <h3 class="fw-bold text-primary">Mobile App Interfaces</h3>
            <p class="text-muted">
                We design mobile app interfaces that captivate users, ensuring a seamless and enjoyable experience across all devices.
            </p>
        </div>
        <div class="col-md-4">
            <h3 class="fw-bold text-primary">User Research & Strategy</h3>
            <p class="text-muted">
                Backed by in-depth user research, our designs are strategic, data-driven, and crafted to meet the needs of your target audience.
            </p>
        </div>
    </div>

    <!-- Section: Contact -->
    <div class="row py-5 bg-light" id="contact">
        <div class="col-lg-12 text-center">
            <h2 class="fw-bold text-primary">Let’s Create Exceptional Experiences Together</h2>
            <p class="text-muted">
                Ready to transform your ideas into extraordinary digital experiences? Contact O.B.M Tech today and let’s bring your vision to life.
            </p>
            <a href="{{ route('contact') }}" class="btn btn-primary">Lets Get Started</a>
        </div>
    </div>
</div>
@endsection
