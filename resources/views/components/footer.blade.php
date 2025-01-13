<footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Stay Connected</h4>
            <p>Get the latest updates on our creative projects, services, and industry insights.</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form">
                <input type="email" name="email" placeholder="Enter your email" required>
                <input type="submit" value="Subscribe">
              </div>
              <div class="loading">Loading...</div>
              <div class="error-message"></div>
              <div class="sent-message">Thank you for subscribing to our newsletter!</div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
    <div class="container footer-top">
      <div class="row gy-4">
        <!-- About Section -->
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="/" class="d-flex align-items-center">
            <span class="sitename">O.B.M TECH</span>
  
          </a>
          <div class="footer-contact pt-3">
            <p>Address : B-103, Block#3, Gulshan E Iqbal, </p>
            <p> Karachi, Pakistan</p>
            <p class="mt-3"><strong>Phone:</strong> <span> +92 302-2196615</span></p>
            <p><strong>Email:</strong><span>obm.techsol@gmail.com </span></p>

          </div>
        </div>
  
        <!-- Quick Links -->
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Quick Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('about') }}">About Us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('portfolio') }}">Portfolio</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('contact') }}">Contact</a></li>
          </ul>
        </div>
  
        <!-- Services -->
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('affilate-marketing') }}">Affiliate Marketing</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('ui-ux') }}">UX/UI Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('website-designing') }}">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Digital Marketing</a></li>
          </ul>
        </div>
  
        <!-- Social Media -->
        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Join us on social media for the latest updates and industry trends.</p>
          <div class="social-links d-flex">
{{-- <a href="#"  target="blank" aria-label="Twitter"><i class="bi bi-twitter"></i></a> --}}
<a href="https://www.facebook.com/people/OBM-Tech/100089305237766/" target="blank" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
{{-- <a href="#"  target="blank" aria-label="Instagram"><i class="bi bi-instagram"></i></a> --}}
<a href="https://www.linkedin.com/company/o-b-m-tech/"  target="blank" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Copyright -->
    <div class="container copyright text-center mt-4">
      <p>© 2024 <strong class="px-1 sitename">o.b.m tech</strong>. All Rights Reserved.</p>
      <div class="credits">
        Designed by <a href="https://obmtechs.com/" target="blank">o.b.m tech</a>
      </div>
    </div>
  
  </footer>
  