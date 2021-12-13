@extends('layouts.public')

@section('content')
  @include('partials._nav')
  <div class="bg-light text-dark p-5 text-center">
    <div class="container pt-5">
        <div class="d-sm-flex align-items-center justify-content">
        <div class="">
            <h3>Learn To Build Cool Tech <span class="text-warning">Stuffs Without Hiring a Developer</span></h3>
            <p class="lead my-4">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat a, enim velit, fugit hic accusantium saepe id impedit esse quam atque suscipit dolorum ab.
            </p>
            <button  class="btn btn-primary btn-lg"
            data-bs-toggle="modal"
            data-bs-target="#enroll">
              Enroll Now
            </button>
          </div>
          <img class="img-fluid w-50 h-40 " src="{{asset('image/assets/showcase.svg')}}"  alt="">
        </div>
    </div>
  </div>
  <div class="container-fluid">
    <!-- quotes -->
    <div class="card mt-4">
      <div class="card-header">
        Quote
      </div>
      <div class="card-body ">
        <blockquote class="blockquote mb-0">
          <p>A well-known quote, contained in a blockquote element.</p>
          <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
      </div>
    </div>
  </div>
  <div class="container">
       <!-- courses -->
       <div class="row mt-4 text-center g-0 d-flex">
      <div class="col-md">
        <div class="card "  style="width: 18rem;">
          <img src="https://media.istockphoto.com/photos/woman-using-covid19-lockdown-to-finally-finish-coding-for-a-new-picture-id1280720394?s=2048x2048" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card "  style="width: 18rem;">
        <!-- public\image\assets\Laravel.svg -->
          <img src="https://media.istockphoto.com/photos/woman-using-covid19-lockdown-to-finally-finish-coding-for-a-new-picture-id1280720394?s=2048x2048" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card "  style="width: 18rem;">
          <img src="https://media.istockphoto.com/photos/woman-using-covid19-lockdown-to-finally-finish-coding-for-a-new-picture-id1280720394?s=2048x2048" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      
        
   
    </div>
  </div>


  @include('public.home._registrationForm')
@endsection
