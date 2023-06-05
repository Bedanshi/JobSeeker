@extends('layouts.account')

@section('content')
  <div class="account-layout border">
    <div class="account-hdr bg-primary text-white border">
      Create Company
    </div>
    <div class="account-bdy p-3">
      <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Choose a Company Category</label>
          <select class="form-control" name="category" required>
            @foreach($categories as $category)
              <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
          </select>
        </div>
        <div class="pb-3">
          <div class="py-3">
            <p>Company logo</p>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="validatedCustomFile" name="logo" required>
            <label class="custom-file-label" for="validatedCustomFile">Choose logo...</label>
            @error('logo')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <div class="py-3">
            <p>Company Title</p>
          </div>
          <input type="text" placeholder="Company title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required>
          @error('title')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <div class="py-3">
            <p>Company Description</p>
          </div>
          <textarea class="form-control @error('description') is-invalid @enderror" name="description" required>{{ old('description') }}</textarea>
          @error('description')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <div class="py-3">
            <p>Company Website</p>
          </div>
          <input type="text" placeholder="Company website" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ old('website') }}" required>
          @error('website')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <!-- Rest of the form fields... -->
        <div class="line-divider"></div>
        <div class="mt-3">
          <button type="submit" class="btn primary-btn">Create company</button>
          <a href="{{ route('account.authorSection') }}" class="btn primary-outline-btn">Cancel</a>
        </div>
      </form>
    </div>
  </div>
@endsection
