
  
  <header id="header" class="header sticky-top" >

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="https://www.facebook.com/people/OBM-Tech/100089305237766/" target="blank" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/company/o-b-m-tech/" target="blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center" >

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{asset('images/Untitled.png')}}" alt=""> 
          {{-- <h1 class="sitename">O.B.M </h1> --}}
        </a>

        <nav id="navmenu" class="navmenu ">
          <ul>
            <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{route('about')}}" class="{{ request()->is('about-us') ? 'active' : '' }}" >About</a></li>
         
            <li><a href="{{route('portfolio')}}" class="{{ request()->is('portfolio') ? 'active' : '' }}">Portfolio</a></li>
            <li><a href="{{route('team')}}" class="{{ request()->is('team') ? 'active' : '' }}">Team</a></li>
            <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul >
<li><a href="{{route('affilate-marketing')}}" class="{{ request()->is('affilate-marketing') ? 'active' : '' }}">Affilate Marketing </a></li>
<li class="dropdown"><a href="{{ route('website-designing') }}"><span>Web Designing Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
<ul class=" text-capitalize">
<li><a href="{{ route('custom-website-development') }}">Custom Websites Development</a></li>
<li><a href="{{ route('webp-application') }}">Webp application</a></li>
<li><a href="{{ route('ui-ux') }}">UI /UX DESIGN</a></li>
{{-- <li><a href="#">Laravel websites Development </a></li> --}}
<li><a href="{{ route('our-development-process') }}">Our Development Process</a></li>
</ul>
</li>

                <li><a href="#">Graphic  Design</a></li>
                <li><a href="#">Digital Marketing</a></li>
              </ul>
            </li>
            <li><a href="{{route('contact')}}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
            <li><a href="{{route('blog')}}"  class="{{ request()->is('blog') ? 'active' : '' }}">blog</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>
