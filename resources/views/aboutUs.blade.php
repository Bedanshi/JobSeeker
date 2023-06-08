@extends('layouts.post')

@section('content')
<section class="home-page pt-4">
  <div class="container">
    <form action="{{route('job.index')}}">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="px-4">
            <div class="rounded-text">
              <p>
                Find jobs, vacancy, career online.
              </p>
            </div>
            <div class="home-search-bar">
                <input type="text" name="q" placeholder="Search Job By Title" class="home-search-input form-control">
                <button type="submit" class="secondary-btn"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="py-5 px-5 text-center">
            <div class="text-light">
              <h4>A dream doesn't become reality through magic, it takes sweat, determination and hard work.
            </h4>
            </div>
          </div>
          </div>
      </div>   
    </form>
  </div>
</section>

<section class="about-us-page py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="section-title">Why Choose Our Job Portal?</h2>
        <p class="section-description">
          Our job portal is designed to help you find the perfect job and build your career. Here's why you should choose our platform:
        </p>
        <ul class="features-list">
          <li><i class="fas fa-check"></i> Access to a vast database of job listings</li>
          <li><i class="fas fa-check"></i> Easy search functionality by job title or keywords</li>
          <li><i class="fas fa-check"></i> Seamless application process</li>
          <li><i class="fas fa-check"></i> User-friendly interface</li>
          <li><i class="fas fa-check"></i> Ability to save and track job applications</li>
          <li><i class="fas fa-check"></i> Customizable job alerts</li>
          <li><i class="fas fa-check"></i> Supportive community and networking opportunities</li>
          <li><i class="fas fa-check"></i> Regularly updated job listings</li>
        </ul>
      </div>
      <div class="col-md-6">
        <h2 class="section-title">Why is a Job Portal Necessary?</h2>
        <p class="section-description">
          A job portal plays a crucial role in the modern job market. Here's why it is necessary for job seekers and employers:
        </p>
        <ul class="features-list">
          <li><i class="fas fa-check"></i> Convenience: Easy access to job opportunities from anywhere, anytime</li>
          <li><i class="fas fa-check"></i> Wide reach: Connects job seekers with a vast network of employers</li>
          <li><i class="fas fa-check"></i> Time-saving: Streamlines the job search and application process</li>
          <li><i class="fas fa-check"></i> Transparency: Provides comprehensive information about job requirements and company details</li>
          <li><i class="fas fa-check"></i> Efficiency: Matches job seekers with relevant job openings</li>
          <li><i class="fas fa-check"></i> Increased opportunities: Expands job seekers' reach beyond their immediate network</li>
          <li><i class="fas fa-check"></i> Continuous updates: Regularly updates job listings to reflect the evolving job market</li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection

@push('css')
<style>
.about-us-page .section-title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

.about-us-page .section-description {
  margin-bottom: 30px;
}

.about-us-page .features-list {
  list-style-type: none;
  padding-left: 0;
}

.about-us-page .features-list li {
  position: relative;
  padding-left: 25px;
  margin-bottom: 10px;
}

.about-us-page .features-list li i {
  position: absolute;
  left: 0;
  top: 3px;
  color: #28a745;
}

@media (max-width: 767.98px) {
  .about-us-page .col-md-6 {
    margin-bottom: 30px;
  }
}


    </style>
    @endpush