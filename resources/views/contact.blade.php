@extends('welcome')
@section('title','O.B.M TECH | Where Your Ideas Get a Digital Glow-Up!')
@section('description','On the hunt for a dependable digital wizard? Transform your online vibe with Alphaisoft’s web design, development, and SEO magic!')
@section('keywords','')
@section('main-content')
      <!-- Contact Section -->
      <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
        </div><!-- End Section Title -->
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row gy-4">
  
            <div class="col-lg-5">
  
              <div class="info-wrap">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h3>Address</h3>
                    <p>B-103, Block#3, Gulshan E Iqbal, Karachi, Pakistan</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone flex-shrink-0"></i>
                  <div>
                    <h3>Call Us</h3>
                    <p>+92 302-2196615</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h3>Email Us</h3>
                    <p><a href="mailto:obm.techsol@gmail.com " class=" text-dark text-decoration-none">obm.techsol@gmail.com </a></p>
                  </div>
                </div><!-- End Info Item -->
  
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d226.13140030661697!2d67.08898925861219!3d24.928581115519872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f2e32806e6b%3A0xb122b69a704b1854!2sRizwan%20Clinic!5e0!3m2!1sen!2s!4v1736616382160!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
  
            <div class="col-lg-7">
              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
  
                  <div class="col-md-6">
                    <label for="name-field" class="pb-2">Your Name</label>
                    <input type="text" name="name" id="name-field" class="form-control" required="">
                  </div>
  
                  <div class="col-md-6">
                    <label for="email-field" class="pb-2">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email-field" required="">
                  </div>
  
                  <div class="col-md-12">
                    <label for="subject-field" class="pb-2">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject-field" required="">
                  </div>
  
                  <div class="col-md-12">
                    <label for="message-field" class="pb-2">Message</label>
                    <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                  </div>
  
                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
  
                    <button type="submit">Send Message</button>
                  </div>
  
                </div>
              </form>
            </div><!-- End Contact Form -->
  
          </div>
  
        </div>
  
      </section>
      
      <!-- /Contact Section -->
@endsection