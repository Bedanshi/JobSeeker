@extends('layouts.account')

@section('content')
<div class="account-layout border">
  <div class="account-hdr bg-primary text-white border">
    Become an Employer
  </div>
  <div class="account-bdy p-3">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <p class="lead">Upgrade to Employer Role</p>
        <p class="text-sm"><i class="fas fa-info-circle"></i> <span class="font-weight-bold">To become an employer, please enter the keyword provided below:</span></p>
        @php
          $keyword = "employer4317"; // Replace "your-keyword" with the actual keyword you want to use
        @endphp
        <div class="my-4">
          <form action="{{ route('account.becomeEmployer') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="keyword">Keyword:</label>
              <input type="text" name="keyword" id="keyword" class="form-control" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn primary-btn">Submit</button>
            </div>
          </form>
          @if(session('error'))
            <p class="text-danger">{{ session('error') }}</p>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
