@extends('welcome')
@section('title','O.B.M TECH | Where Your Ideas Get a Digital Glow-Up!')
@section('description','On the hunt for a dependable digital wizard? Transform your online vibe with Alphaisoft’s web design, development, and SEO magic!')
@section('keywords','affiliate marketing, digital marketing, graphic design, website development')
@section('main-content')

<main class="main">

  <!-- Hero Section -->
<section id="hero" class="hero section light-background" style="display: flex; align-items: center; justify-content: center;">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center text-center" data-aos="zoom-out">
        <h1 style="font-size: 40px;">Welcome to <span>O.B.M TECH</span></h1>
        <p style="font-size: 15px;" class="text-dark">
          We are a comprehensive e-commerce company dedicated to empowering businesses with a wide range of services under one roof. From cutting-edge digital marketing strategies and affiliate marketing solutions to professional website development, impactful social media marketing, and custom logo design, we help you innovate, market, design, and thrive in the digital landscape. Our mission is to provide tailored solutions that drive growth, enhance brand visibility, and create lasting impressions for businesses of all sizes.
        </p>
        <div class="d-flex justify-content-center">
          <a href="{{ route('contact') }}" class="btn-get-started">Get Started</a>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- /Hero Section -->

<!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

      <div class="container">
        <div class="container section-title" data-aos="fade-up">
          <h2>Featured Services</h2>
          <p><span>Discover Our</span> <span class="description-title">Exclusive Services</span></p>
        </div><!-- End Section Title -->
    
        <div class="row gy-4">
    
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="" class="stretched-link">Digital Strategy</a></h4>
              <p>Crafting innovative digital strategies to elevate your brand and engage your audience.</p>
            </div>
          </div><!-- End Service Item -->
    
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link">Creative Design</a></h4>
              <p>Delivering visually stunning and impactful designs tailored to your brand identity.</p>
            </div>
          </div><!-- End Service Item -->
    
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Content Marketing</a></h4>
              <p>Creating compelling content that resonates with your audience and drives results.</p>
            </div>
          </div><!-- End Service Item -->
    
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link">Web Development</a></h4>
              <p>Building robust and scalable websites that deliver seamless user experiences.</p>
            </div>
          </div><!-- End Service Item -->
    
        </div>
    
      </div>
    
    </section><!-- /Featured Services Section -->
    

  <!-- About Section -->
<section id="about" class="about section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>About</h2>
    <p><span>Discover More</span> <span class="description-title">About Our Agency</span></p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-3">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/img/about.jpg" alt="About Us" class="img-fluid">
      </div>

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="about-content ps-0 ps-lg-3">
          <h3>We Help Brands Grow and Achieve Their Vision.</h3>
          <p class="fst-italic">
            Our team of experts is dedicated to crafting strategies that transform ideas into impactful solutions.
          </p>
          <ul>
            <li>
              <i class="bi bi-diagram-3"></i>
              <div>
                <h4>Innovative Strategies for Your Success</h4>
                <p>We design customized solutions to meet your unique business challenges and goals.</p>
              </div>
            </li>
            <li>
              <i class="bi bi-fullscreen-exit"></i>
              <div>
                <h4>Creative Solutions That Make an Impact</h4>
                <p>From concept to execution, we deliver designs and campaigns that inspire and engage.</p>
              </div>
            </li>
          </ul>
          <p>
            Whether you’re building a brand, reaching new audiences, or enhancing your digital presence, we are here to guide you every step of the way. Let’s create something extraordinary together.
          </p>
        </div>

      </div>
    </div>

  </div>

</section>
<!-- /About Section -->


    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>Affiliate Marketing</span> <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="95"></div>
              </div>
            </div><!-- End Skills Item -->

          

            <div class="progress">
              <span class="skill"><span>web development</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>Digital Marketing</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Graphic Designing</span> <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-emoji-smile"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-journal-richtext"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-headset"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-people"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container">
        <!-- start Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Our Clients</h2>
          <p><span>Trusted By</span> <span class="description-title">Leading Brands Worldwide</span></p>
        </div><!-- End Section Title -->
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
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a href="https://redeemrelax.com/" target="_blank" rel="noopener noreferrer"><img src="{{asset('assets/img/clients/logo.png')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section>
    <!-- /Clients Section -->

  <!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Services</h2>
    <p><span>Explore Our</span> <span class="description-title">Professional Services</span></p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-activity"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Data Analytics</h3>
          </a>
          <p>Transform data into actionable insights with our advanced analytics solutions tailored to your business needs.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-broadcast"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Digital Marketing</h3>
          </a>
          <p>Boost your online presence with our strategic marketing services, including SEO, social media, and PPC campaigns.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-easel"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Creative Design</h3>
          </a>
          <p>Enhance your brand identity with stunning graphics, engaging designs, and creative solutions that stand out.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-bounding-box-circles"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Web Development</h3>
          </a>
          <p>Build dynamic, user-friendly websites and applications with our expert development services for all platforms.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-calendar4-week"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Project Management</h3>
          </a>
          <p>Efficiently plan, execute, and deliver projects with our professional project management solutions.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-chat-square-text"></i>
          </div>
          <a href="#" class="stretched-link">
            <h3>Consulting Services</h3>
          </a>
          <p>Leverage expert advice to drive growth, streamline processes, and navigate business challenges effectively.</p>
        </div>
      </div><!-- End Service Item -->

    </div>
  </div>

</section>
<!-- /Services Section -->


<!-- Testimonials Section -->
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


    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p><span>Check Our&nbsp;</span> <span class="description-title">Portfolio</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Card</li>
            <li data-filter=".filter-branding">Web</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="{{asset('assets/img/masonry-portfolio/masonry-portfolio-6.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section>
    <!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Team</h2>
        <p><span>Meet Our</span> <span class="description-title">Creative Minds</span></p>
      </div>
      <!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/ozair.png') }}" class="team-image" alt="">
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
              <div class="member-info">
                <h4>ozair  bin mazher  </h4>
                <span>Founder & Chief Executive Officer</span>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/shujahat.png') }}" class="team-image" alt="">
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
              <div class="member-info">
                <h4>Syed Shujat Hussain </h4>
                <span>Affiliate Lead</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/hasnain.png') }}" class="team-image" alt="">
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
              <div class="member-info">
                <h4>hasnain ali khan</h4>
                <span>Web Developer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

         

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/omair.png') }}" class="team-image" alt="" >
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
              <div class="member-info">
                <h4>Umair Hasan Qureshi </h4>
                <span>Data Research Analyst</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section>
    <!-- /Team Section -->

<!-- Pricing Section -->
<section id="pricing" class="pricing section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Pricing</h2>
    <p><span>Check our</span> <span class="description-title">Services</span></p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-3">

      <!-- Affiliate Marketing -->
      <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="pricing-item">
          <h3>Affiliate Marketing</h3>
          <h4><sup>$</sup>99<span> / project</span></h4>
          <ul>
            <li>Custom affiliate strategies</li>
            <li>Analytics integration</li>
            <li>Dedicated support</li>
            <li class="na">Social media management</li>
            <li class="na">Email marketing campaigns</li>
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Get Started</a>
          </div>
        </div>
      </div><!-- End Pricing Item -->

      <!-- Graphic Design -->
      <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="pricing-item featured">
          <h3>Graphic Design</h3>
          <h4><sup>$</sup>199<span> / project</span></h4>
          <ul>
            <li>Logo and branding</li>
            <li>Marketing materials</li>
            <li>Custom illustrations</li>
            <li>High-resolution outputs</li>
            <li class="na">Motion graphics</li>
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Get Started</a>
          </div>
        </div>
      </div><!-- End Pricing Item -->

      <!-- Website Development -->
      <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="pricing-item">
          <h3>Website Development</h3>
          <h4><sup>$</sup>499<span> / project</span></h4>
          <ul>
            <li>Responsive design</li>
            <li>SEO-friendly websites</li>
            <li>E-commerce solutions</li>
            <li>Custom integrations</li>
            <li>1-year maintenance</li>
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Get Started</a>
          </div>
        </div>
      </div><!-- End Pricing Item -->

      <!-- Advanced Services -->
      <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="pricing-item">
          <span class="advanced">Advanced</span>
          <h3>Full Suite</h3>
          <h4><sup>$</sup>999<span> / project</span></h4>
          <ul>
            <li>Affiliate marketing strategies</li>
            <li>Comprehensive graphic design</li>
            <li>Custom website development</li>
            <li>Analytics and optimization</li>
            <li>Priority support</li>
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Get Started</a>
          </div>
        </div>
      </div><!-- End Pricing Item -->

    </div>

  </div>

</section><!-- /Pricing Section -->


  <!-- Faq Section -->
<section id="faq" class="faq section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>F.A.Q</h2>
    <p><span>Frequently Asked</span> <span class="description-title">Questions</span></p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

        <div class="faq-container">

          <div class="faq-item faq-active">
            <h3>What services does your agency offer?</h3>
            <div class="faq-content">
              <p>Our agency specializes in digital marketing, web design, branding, SEO optimization, and content creation. We help businesses establish and grow their online presence with customized strategies.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>How long will it take to see results from your services?</h3>
            <div class="faq-content">
              <p>Depending on the service, results can vary. For SEO, it can take 3-6 months to see significant improvements, while for paid ads or social media campaigns, you may see faster results. We provide regular reports to track progress.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>What industries do you work with?</h3>
            <div class="faq-content">
              <p>We work with a wide range of industries including e-commerce, healthcare, real estate, education, and more. Our team tailors strategies to meet the unique needs of each industry.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>What is the cost of your services?</h3>
            <div class="faq-content">
              <p>The cost of our services varies depending on the scope and complexity of the project. We offer flexible pricing models and will provide you with a customized quote after discussing your specific needs.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>Do you offer ongoing support after the project is complete?</h3>
            <div class="faq-content">
              <p>Yes! We offer ongoing maintenance and support services to ensure that your website, campaigns, or branding efforts continue to perform optimally.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>How can I get started with your agency?</h3>
            <div class="faq-content">
              <p>Getting started is easy! Simply reach out to us via our contact form or schedule a consultation. Our team will work with you to understand your goals and develop a tailored strategy.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

        </div>

      </div><!-- End Faq Column-->

    </div>

  </div>

</section><!-- /Faq Section -->


  

  </main>
@endsection