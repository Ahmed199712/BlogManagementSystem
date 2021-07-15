<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>{{ settings()->site_name }}</h3>
        <p>
          {{ settings()->site_address }} <br><br> 
          <strong>Phone:</strong> {{ settings()->site_phone }}<br>
          <strong>Email:</strong> {{ settings()->site_email }}<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.index') }}">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('pages.about') }}">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.posts.index') }}">Blog Posts</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('pages.contact') }}">Contact Us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Categories</h4>
        <ul>
          @foreach( categories() as $category )
            <li><i class="fa fa-chevron-right fa-fw"></i> <a href="{{ route('getPostsByCategory',[$category->slug]) }}">{{ $category->name }}</a></li>
          @endforeach
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
        
        <!--<form action="#">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
        -->
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="mr-md-auto text-center text-md-left">
    <div class="copyright">
      &copy; Copyright <strong><span>Company</span></strong>. All Rights Reserved
    </div>
    <!--
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
    -->
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
    <a href="#" class="google-plus"><i class="fa fa-skype"></i></a>
    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->