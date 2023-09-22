@extends('layouts.account')

@section('content')
<div class="account-hdr bg-primary text-white border">
    User Account
  </div>
  
<div class="account-layout border d-flex align-items-center justify-content-center">
   
  <div class="account-bdy border py-3">
   
    <div class="row container d-flex justify-content-center">
      <div class="col-xl-12 col-md-12">
        <div class="card user-card-full">
          <div class="row m-l-0 m-r-0">
            
            <div class="col-sm-4 bg-c-lite-green user-profile">
              <div class="card-block text-center text-white">
                
                <div class="m-b-25">
                  @if(auth()->user()->gender == 'female')
                    <img src="{{ asset('images/girl.jpg') }}" class="img-radius" alt="Female Profile Image">
                  @else
                    <img src="{{ asset('images/user-profile.png') }}" class="img-radius" alt="Male Profile Image">
                  @endif
                </div>
                <h6 class="f-w-600">{{ auth()->user()->name }}</h6>
                <p>User</p>
              </div>
            </div>
            <!-- Rest of the card content -->
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <div class="card-block text-center">
          <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Account Information!</h6>
          <div class="row">
            <div class="col-sm-6">
              <p class="m-b-10 f-w-600" style="padding-left: 190px">Email</p>
              <h6 class="text-muted f-w-400" style="padding-left: 120px">{{ auth()->user()->email }}</h6>
            </div>
         
          </div>
          <br>
          <div class="row">
            <div class="col-sm-6">
              <p class="m-b-10 f-w-600">Password</p>
              <a href="{{ route('account.changePassword') }}" class="btn primary-outline-btn">Change password</a>
            </div>
            <div class="col-sm-6">
                <p class="m-b-10 f-w-600">Want to leave?</p>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="btn primary-outline-btn">Logout</button>
                </form>
              </div>
              
          </div>
          <ul class="social-link list-unstyled m-t-40 m-b-10">
            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
</div>
@endsection
@push('css')
<style>

.user-profile img {
  width: 150px; /* Adjust the desired width */
  height: auto;
}

.user-card-full {
  max-width: 300px; /* Adjust the desired maximum width */
  max-height: 240px;
  margin: 0 auto;
}

.account-bdy {
  flex-grow: 1;
  padding: 20px;
}

.card-block {
  padding: 30px;
}

.card-block p {
  font-size: 16px;
  margin-bottom: 15px;
}

.card-block h6 {
  font-size: 18px;
  margin-bottom: 20px;
}

.social-link {
  margin-top: 40px;
}

.social-link li {
  display: inline-block;
  margin-right: 10px;
}

.social-link li a {
  font-size: 24px;
}

</style>
@endpush
