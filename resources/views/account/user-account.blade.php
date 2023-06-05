
@extends('layouts.account')

@section('content')
<div class="account-layout border d-flex align-items-center justify-content-center">
  <div class="account-hdr bg-primary text-white border">
    User Account
  </div>
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
                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Email</p>
                        <h6 class="text-muted f-w-400">{{auth()->user()->email}}</h6>
                    </div>
                    <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Phone</p>
                        <h6 class="text-muted f-w-400">not set</h6>
                    </div>
                </div>
                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Account</h6>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Password</p>
                        <a href="{{route('account.changePassword')}}" class="btn primary-outline-btn">Change password</a>
                    </div>
                    <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Logout</p>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
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
.user-card-full {
    overflow: hidden;
}
.card {
    border-radius: 5px;
    box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    border: none;
    margin-bottom: 30px;
}
.m-r-0 {
    margin-right: 0;
}
.m-l-0 {
    margin-left: 0;
}
.user-card-full .user-profile {
    border-radius: 5px 0 0 5px;
}
.user-profile {
    padding: 20px 0;
}
.card-block {
    padding: 1.25rem;
}
.m-b-25 {
    margin-bottom: 25px;
}
.img-radius {
    border-radius: 5px;
}
h6 {
    font-size: 14px;
}
.card .card-block p {
    line-height: 25px;
}

@media only screen and (min-width: 1400px) {
    p {
        font-size: 14px;
    }
}
.card-block {
    padding: 1.25rem;
}
.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}
.m-b-20 {
    margin-bottom: 20px;
}
.p-b-5 {
    padding-bottom: 5px !important;
}
.card .card-block p {
    line-height: 25px;
}
.m-b-10 {
    margin-bottom: 10px;
}
.text-muted {
    color: #919aa3 !important;
}
.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}
.f-w-600 {
    font-weight: 600;
}
.m-b-20 {
    margin-bottom: 20px;
}
.m-t-40 {
    margin-top: 20px;
}
.p-b-5 {
    padding-bottom: 5px !important;
}
.m-b-10 {
    margin-bottom: 10px;
}
.m-t-40 {
    margin-top: 20px;
}
</style>
@endpush
