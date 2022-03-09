@extends('layouts.elearningLayout')

@section('head')
<link rel="stylesheet" href="{{ asset('css/crashcourse/crashindex.css')}}">
@endsection


@section('content')
<style>
 
</style>
<main>
  <div class="container course-holder">
    <div class="course_left">
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

      <div class="leave_comment mt-4">
        <form class="form" action="/comment" method="POST">
          @csrf
          <h4>Leave a Comment</h4>
          <textarea class="input textarea form-control comment" name="comment" id="" cols="30" rows="10"></textarea>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
        <div class="mt-4">
          <h5>Comments</h5>
          <div class="">
            @foreach($userComments as $userComment)
              <div class="">
                <p>{!!$userComment->comment!!}</p>
                <small>
                  <span>By: </span> <span><b>{!!$userComment->user->name!!}</b></span> |
                  <span>at: </span> <span><b>{!!$userComment->created_at!!}</b></span> |
                  <span><a href="" class=""><b>Delete</b></a></span>
                </small> 
              </div>
            @endforeach 
          </div>
          <br>
          <br>
          <div class="">
            @foreach($publicComms as $publicComm)
              <div class="">
                <p>{!!$publicComm->comment!!}</p>
                <small>
                  <span>By: </span> <span><b>{!!$publicComm->user->name!!}</b></span> |
                  <span>at: </span> <span><b>{!!$publicComm->created_at!!}</b></span> |
                  @if($publicComm->user->id == @Auth::user()->id)
                  <span><a href="" class="">Delete</a></span>
                  @endif
                </small> 
              </div>
            @endforeach 
          </div>
          <div>

          </div>
        </div>
      </div>
    </div>
    <!-- The right hand side starts -->
    <div class="course_right">
      <h5>Course Outline</h5>
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