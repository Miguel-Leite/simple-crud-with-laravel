@extends('layouts.auth')

@section('title', 'Sign-In')

@section('content')

    @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>        
    @endif

    @if (session('danger'))
          <div class="alert alert-danger">
            {{ session('danger') }}
          </div>
    @endif
    <form method="POST" action="{{ route('auth.user') }}">

        @csrf

        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
        </div>

        <div class="form-group my-2">
          <button type="submit" class="btn btn-primary col-sm-12">Enter</button>
        </div>

    </form>

@endsection