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
      <!-- tabs -->
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Course Outline</button>
          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Comments</button>
          <!-- <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button> -->
        </div>
      </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        Out line goes here when ready
      </div>
      <div class="tab-pane fade mb-5" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="leave_comment mb-5 mt-4">
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
                <div class="mt-5">
                  <p>{!!$userComment->comment!!}</p>
                  <small class="">
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
                <div class="mt-5 mb-5">
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
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
    </div>

      <!-- end of tabs -->
     
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