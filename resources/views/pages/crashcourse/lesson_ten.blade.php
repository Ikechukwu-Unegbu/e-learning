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
      <video width="320" height="240" controls>
        <source src="{{asset('image/videos/10. Introduction to Future.mp4')}}" type="video/mp4">
        <!-- <source src="movie.ogg" type="video/ogg"> -->
        Your browser does not support the video tag.
      </video>
      <div class="details">
        <div class="title">
          <span id="playing">Playing Now:</span> <span id="current_play">Introduction to Future</span>
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