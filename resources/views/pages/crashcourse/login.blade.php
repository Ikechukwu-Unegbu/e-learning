@extends('layouts.elearningLayout')

@section('head')
<link rel="stylesheet" href="{{asset('css/crashcourse/signup.css')}}">
@endsection


@section('content')
<main>
  <div class="reg-body">
    <div class="reg-body-left">
      <h3>Welcome to DigitMoni <span id="colored">Crypto Crash Course<span></h3>
    </div>
    <div class="reg-body-right">
      <div class="container">
        <form action="/login" class="reg-form" method="POST">
          @csrf 
          <div class="form-group">
            <h4>Login</h4>
          </div>
          <!-- <div class="form-group">
            <label for="" class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
          </div>
          <input type="text" value="crash" style="display:none">
          <div class="form-group">
            <label for="" class="form-label">Telegram</label>
            <input type="text" name="telegram" class="form-control">
          </div> -->
          <div class="form-group">
            <label for="" class="form-label">Email</label>
            <input type="text" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="" class="form-label">Password</label>
            <input type="text" name="password" class="form-control">
          </div>
          <!-- <div class="form-group">
            <label for="" class="form-label">Confirm Password</label>
            <input type="text" class="form-control" name="password_confirmation">
          </div> -->
          <div class="form-group">
            <button class="btn">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
@endsection