@extends('welcome')
@section('title','O.B.M TECH | Where Your Ideas Get a Digital Glow-Up!')
@section('description','On the hunt for a dependable digital wizard? Transform your online vibe with Alphaisoft’s web design, development, and SEO magic!')
@section('keywords','')
@section('main-content')
<style>
    .heroaff {
        background: linear-gradient(rgba(0, 0, 0, 0.849), rgba(0, 0, 0, 0.822)), url('https://via.placeholder.com/1500x500') center/cover no-repeat;
        color: rgb(255, 255, 255);
        text-align: center;
        padding: 100px 20px;
    }
    .heroaff h1{
        color: white;
    }
    .benefit-icon {
        font-size: 3rem;
        color: #007bff;
    }
    .process-step {
        font-size: 1.5rem;
        font-weight: bold;
        color: #007bff;
    }
    .cta-section {
        background-color: #f8f9fa;
        padding: 50px 20px;
    }
</style>

<!-- Hero Section -->
<div class="heroaff">
    <h1>Affiliate Marketing Services</h1>
    <p>Boost your sales and grow your network with our tailored affiliate marketing solutions.</p>
    {{-- <a href="#benefits" class="btn btn-primary">Learn More</a> --}}
</div>

<!-- Benefits Section -->
<section id="benefits" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Why Choose Us?</h2>
            <p>Discover the benefits of partnering with our affiliate marketing experts.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 text-center">
                <i class="benefit-icon bi bi-graph-up"></i>
                <h5 class="mt-3">Increased ROI</h5>
                <p>Maximize your return on investment with our performance-driven strategies.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="benefit-icon bi bi-people"></i>
                <h5 class="mt-3">Wide Network</h5>
                <p>Access a vast network of high-performing affiliates.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="benefit-icon bi bi-lightbulb"></i>
                <h5 class="mt-3">Innovative Strategies</h5>
                <p>Stay ahead of the competition with cutting-edge marketing techniques.</p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section id="how-it-works" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2>How It Works</h2>
            <p>Our streamlined affiliate marketing process ensures success at every step.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 text-center">
                <div class="process-step">1</div>
                <h5 class="mt-3">Strategic Planning</h5>
                <p>We analyze your goals and create a customized affiliate marketing plan.</p>
            </div>
            <div class="col-md-4 text-center">
                <div class="process-step">2</div>
                <h5 class="mt-3">Affiliate Recruitment</h5>
                <p>We connect you with top-performing affiliates to maximize your reach.</p>
            </div>
            <div class="col-md-4 text-center">
                <div class="process-step">3</div>
                <h5 class="mt-3">Performance Tracking</h5>
                <p>We provide detailed analytics to monitor and optimize your campaign.</p>
            </div>
        </div>
    </div>
</section>


<section id="testimonials" class="testimonials section dark-background">

  <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="Testimonials Background">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="Testimonial Image 1">
            <h3>Emily Johnson</h3>
            <h4>Owner, CreativeFlair</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>O.B.M. Tech's graphic design services elevated our brand image. Their creativity and professionalism are unmatched!</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="Testimonial Image 2">
            <h3>Michael Carter</h3>
            <h4>Marketing Lead, TechNova</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Their expertise in affiliate marketing helped us increase our revenue significantly. O.B.M. Tech is a game changer!</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="Testimonial Image 3">
            <h3>Linda Taylor</h3>
            <h4>CEO, StartSmart</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Our new website designed by O.B.M. Tech has received amazing feedback from clients. They truly understand user experience.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="Testimonial Image 4">
            <h3>James Peterson</h3>
            <h4>Entrepreneur, DreamSpace</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Thanks to O.B.M. Tech, our online presence has grown tremendously. Their digital strategies are highly effective.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="Testimonial Image 5">
            <h3>Sophia Lee</h3>
            <h4>Freelance Designer</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Collaborating with O.B.M. Tech on web development projects has been a breeze. Highly skilled and reliable team!</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section>
<!-- /Testimonials Section -->

<!-- Call to Action Section -->
<section class="cta-section text-center">
  <div class="container">
      <h2>Start Your Affiliate Journey Today!</h2>
      <p>Let us help you transform your ideas into measurable results with our affiliate marketing expertise.</p>
      <a href="#contact" class="btn btn-primary btn-lg">Get Started</a>
  </div>
</section>
@endsection
