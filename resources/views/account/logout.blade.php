@extends('layouts.auth')

@section('content')
<div class="container my-4">
    <!-- Your existing login code goes here -->

    <div class="text-center">
        <p>Logged in as: {{ auth()->user()->email }}</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</div>
@endsection
