@extends('welcome')
@section('title','O.B.M TECH | Where Your Ideas Get a Digital Glow-Up!')
@section('description','On the hunt for a dependable digital wizard? Transform your online vibe with Alphaisoft’s web design, development, and SEO magic!')
@section('keywords','')
@section('main-content')
<style>
  /* Style the Vision and Mission section */
.section-title {
  font-size: 1.2rem;
  color: #333;
  font-weight: 600;
  margin-bottom: 1px;
}

.section-content {
  font-size: 1rem;
  color: #555;
  line-height: 1.6;
}

/* Style for the Testimonial Section */
.testimonial-box {
  background: #f9f9f9;
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.testimonial-box:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.testimonial-author {
  display: block;
  margin-top: 15px;
  font-size: 1rem;
  color: #333;
  font-weight: bold;
  text-align: right;
}

/* Responsive styling */
@media (max-width: 768px) {
  .section-title {
    font-size: 1.5rem;
  }
  .testimonial-box {
    padding: 15px;
  }
  .testimonial-author {
    font-size: 0.9rem;
  }
}

@media (max-width: 576px) {
  .section-title {
    font-size: 1.3rem;
  }
  .section-content {
    font-size: 0.9rem;
  }
}

</style>
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

      <div class="container">
        <!-- Vision and Mission Section -->
        <div class="row mt-5">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="section-title">Our Vision</h3>
            <p class="section-content">We aim to be the leaders in digital transformation, providing innovative solutions that inspire businesses to grow and thrive in the digital age.</p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="section-title">Our Mission</h3>
            <p class="section-content">Our mission is to empower businesses with cutting-edge technology and creative strategies, delivering exceptional results that drive success.</p>
          </div>
        </div>
        <!-- End Vision and Mission Section -->
      
        <!-- Team Testimonials Section -->
        <div class="row mt-5">
          <div class="col-12 text-center" data-aos="fade-up">
            <h3 class="section-title">What Our Team Says</h3>
            <p class="section-content">Hear from our passionate team members.</p>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-box">
              <p>"Working at O.B.M Tech has been a rewarding experience. The environment fosters creativity and innovation!"</p>

            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial-box">
              <p>"Collaborating with a team of talented individuals has allowed me to grow professionally."</p>
              {{-- <span class="testimonial-author">- ozair  bin mazher, Founder & Chief Executive Officer</span> --}}
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="testimonial-box">
              <p>"Being a part of this team is about more than work—it's about making an impact."</p>
              
            </div>
          </div>
        </div>
        <!-- End Team Testimonials Section -->
      </div>
      
  </div>

</section>
<!-- /Team Section -->

@endsection
