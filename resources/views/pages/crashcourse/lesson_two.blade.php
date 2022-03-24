@extends('layouts.elearningLayout')

@section('head')
<link rel="stylesheet" href="{{ asset('css/crashcourse/crashindex.css')}}">
@endsection


@section('content')
<style>
 
</style>
<main class="mb-5">
  <div class="container course-holder">
    <div class="course_left">
      <h2>Introduction to Blockchain Technology and Crypto Trading</h2>
      <!-- <img style="" src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt=""> -->
      <video width="320" height="240" controls>
        <source src="{{asset('image/videos/2. Types of Blockchain Technology.mp4')}}" type="video/mp4">
        <!-- <source src="movie.ogg" type="video/ogg"> -->
        Your browser does not support the video tag.
      </video>
      <div class="details">
        <div class="title">
          <span id="playing">Playing Now:</span> <span id="current_play">Types of Blockchain Technology</span>
        </div>
        <div class="buttons">
          <button class="btn"><i class="fa-solid fa-thumbs-up"></i></button>
          <button class="btn"><i class="fa-solid fa-thumbs-down"></i></button>
        </div>
      </div>
      <!-- tabs -->
      @include('pages.crashcourse.partials._nav')
      <!-- end of tabs -->
      
      <!-- The right hand side starts -->
      @include('pages.crashcourse.partials._courselist')
      <!-- The right hand side ends -->
  </div>

</main>
@endsection