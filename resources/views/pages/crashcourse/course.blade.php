@extends('layouts.elearningLayout')

@section('head')
<link rel="stylesheet" href="{{ asset('css/crashcourse/crashindex.css')}}">
@endsection


@section('content')
<style>
 
</style>
<main>
  <div class="container row">
    <div class="course_left col-8">
      <h2>Introduction to Blockchain Technology and Crypto Trading</h2>
      <img style="" src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
      <div class="details">
        <div class="title">
          <span id="playing">Playing Now:</span> <span id="current_play">Lorem ipsum dolor sit amet consectetur.</span>
        </div>
        <div class="buttons">
          <button class="btn"><i class="fa-solid fa-thumbs-up"></i></button>
          <button class="btn"><i class="fa-solid fa-thumbs-down"></i></button>
        </div>
      </div>
      <div class="leave_comment">
        <form action="">
          <textarea name="" id="" cols="30" rows="10"></textarea>
          <button>Send</button>
        </form>
      </div>
    </div>
    <!-- The right hand side starts -->
    <div class="course_right col-4">
      <div class="reactangle">
        <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"/>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="reactangle">
        <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"/>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </div>
    <!-- The right hand side ends -->
  </div>

</main>
@endsection