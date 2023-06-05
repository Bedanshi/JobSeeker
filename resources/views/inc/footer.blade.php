<footer>
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="footer-links">
            <h5 class="lead footer-hdr">For Job Seekers</h5>
            <div class="line-divider"></div>
            <div class="footer-link-list">
              <a href="{{route('register')}}" class="footer-links">Register <span class="badge badge-primary">Free</span></a>
              <a href="{{route('login')}}" class="footer-links">Login</a>
              <a href="" class="footer-links">Find jobs</a>
              <a href="#" class="footer-links">FAQ</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="footer-links">
            <h5 class="lead footer-hdr">For Employers</h5>
            <div class="line-divider"></div>
            <div class="footer-link-list">
              <a href="{{route('register')}}" class="footer-links">Register <span class="badge badge-primary">Free</span></a>
              <a href="{{route('company.login')}}" class="footer-links">Login</a>
              <a href="{{route('post.create')}}" class="footer-links">Vacancy Announcement</a>
              <a href="#" class="footer-links">FAQ</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="footer-links">
            <h5 class="lead footer-hdr">Links</h5>
            <div class="line-divider"></div>
            <div class="footer-link-list">
              <a href="#" class="footer-links">Home</a>
              <a href="#" class="footer-links">About Us</a>
              <a href="#" class="footer-links">Advertise</a>
              <a href="#" class="footer-links">Contact Us</a>
              <a href="#" class="footer-links">FAQ</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="footer-links">
            <h3 class="footer-brand mb-2">JobLister</h3>
            <div class="footer-link-list">
              <a href="#" class="footer-links"><i class="fas fa-compass"></i> Newroad, Kathmandu-64400, Nepal</a>
              <a href="tel:98400001511" class="footer-links"><i class="fas fa-phone"></i> +977-6000-000</a>
              <a href="tel:98400001511" class="footer-links"><i class="fas fa-mobile"></i> +977-9840003200</a>
              <a href="mailto:info@joblister.com" class="footer-links"><i class="fas fa-envelope"></i> info@joblister.com</a>
              <div class="social-links">
                <a href="https://www.facebook.com" target="_blank" class="social-link"><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com" target="_blank" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com" target="_blank" class="social-link"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

@push('css')
<style>
  .footer-main {
    background-color: #272727;
    color: #ddd;
  }

  .footer-links {
    margin-bottom: 15px;
  }

  .footer-hdr {
    margin-top: 0;
  }

  .line-divider {
    height: 1px;
    background-color: #ddd;
    margin: 10px 0;
  }

  .footer-link-list {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }

  .footer-link-list a {
    display: block;
    color: #ddd;
    margin-bottom: 5px;
    text-decoration: none;
  }

  .footer-brand {
    font-size: 18px;
    margin-bottom: 10px;
  }
  .social-links {
  margin-top: 10px;
  display: flex;
}

.social-link {
  color: #ddd;
  margin-right: 5px;
  text-decoration: none;
}


</style>
@endpush
