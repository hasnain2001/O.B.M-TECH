@extends('welcome')
@section('title', 'O.B.M TECH | Our Portfolio')
@section('description', 'Explore the projects that O.B.M TECH has successfully completed in affiliate marketing, digital marketing, graphic design, and website development. Witness our creative and technical expertise.')
@section('keywords', 'portfolio, projects, affiliate marketing, digital marketing, graphic design, website development')

@section('main-content')
<div class="container py-5">
    <div class="container my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="/" class="text-decoration-none text-dark">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">portfolio</li>
            </ol>
        </nav>
    </div>
    <!-- Portfolio Header -->
    <div class="text-center mb-5">
        <h1 class="display-6 fw-bold text-dark">Our Portfolio</h1>
        <p class="lead text-muted">Showcasing Our Expertise in Delivering Digital Solutions</p>
    </div>

    <!-- Portfolio Grid -->
    <div class="row g-4">
      <!-- Portfolio Item 1 -->
      <div class="col-md-4">
          <div class="card shadow-sm border-0 text-center">
              <div class="card-body">
                  <i class="bi bi-megaphone-fill display-3 text-primary"></i>
                  <h5 class="card-title fw-bold text-dark mt-3">Affiliate Marketing Campaign</h5>
                  <p class="card-text text-muted">
                      A successful campaign connecting brands with affiliates to boost revenue and traffic.
                  </p>
              </div>
          </div>
      </div>
  
      <!-- Portfolio Item 2 -->
      <div class="col-md-4">
          <div class="card shadow-sm border-0 text-center">
              <div class="card-body">
                  <i class="bi bi-search display-3 text-success"></i>
                  <h5 class="card-title fw-bold text-dark mt-3">SEO Optimization</h5>
                  <p class="card-text text-muted">
                      Enhanced online visibility for a local business through targeted SEO strategies.
                  </p>
              </div>
          </div>
      </div>
  
      <!-- Portfolio Item 3 -->
      <div class="col-md-4">
          <div class="card shadow-sm border-0 text-center">
              <div class="card-body">
                  <i class="bi bi-palette display-3 text-danger"></i>
                  <h5 class="card-title fw-bold text-dark mt-3">Creative Graphic Design</h5>
                  <p class="card-text text-muted">
                      Crafted unique branding materials and visuals for a startup, leaving a lasting impression.
                  </p>
              </div>
          </div>
      </div>
  
      <!-- Portfolio Item 4 -->
      <div class="col-md-4">
          <div class="card shadow-sm border-0 text-center">
              <div class="card-body">
                  <i class="bi bi-bag-fill display-3 text-warning"></i>
                  <h5 class="card-title fw-bold text-dark mt-3">E-commerce Website Development</h5>
                  <p class="card-text text-muted">
                      Designed and developed a responsive e-commerce platform for a retail brand.
                  </p>
              </div>
          </div>
      </div>
  
      <!-- Portfolio Item 5 -->
      <div class="col-md-4">
          <div class="card shadow-sm border-0 text-center">
              <div class="card-body">
                  <i class="bi bi-share display-3 text-info"></i>
                  <h5 class="card-title fw-bold text-dark mt-3">Social Media Marketing</h5>
                  <p class="card-text text-muted">
                      Managed social media campaigns, increasing engagement by 50% for a client.
                  </p>
              </div>
          </div>
      </div>
  
      <!-- Portfolio Item 6 -->
      <div class="col-md-4">
          <div class="card shadow-sm border-0 text-center">
              <div class="card-body">
                  <i class="bi bi-building display-3 text-secondary"></i>
                  <h5 class="card-title fw-bold text-dark mt-3">Corporate Branding</h5>
                  <p class="card-text text-muted">
                      Delivered a comprehensive branding package for a corporate client, elevating their image.
                  </p>
              </div>
          </div>
      </div>
  </div>
  
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
    <!-- Call-to-Action Section -->
    <div class="text-center mt-5">
        <h2 class="fw-bold text-dark">Let’s Create Something Amazing Together</h2>
        <p class="lead text-muted">Contact us today to discuss your project requirements.</p>
        <a href="{{route('contact')}}" class="btn btn-primary btn-lg"><i class="fas fa-envelope"></i> Get in Touch</a>
    </div>
</div>
@endsection
