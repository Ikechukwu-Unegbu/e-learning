@extends('layouts.elearningLayout')

@section('content')
<style>
  form{
    width: 50%;
  }
  .leftside{
    width: 50%;
  }
  #colored{
    color:#E9B918;
  }
  span{
    color: #080E31;
  }
</style>
<main>
  <div class="header">

  </div>
  <div class="reg_body">
    <!-- start -->
    <div class="bg-light text-dark  text-center">
      <div class="container ">
        <div class="d-sm-flex align-items-center justify-content">
            <!-- <div class="">
              <h3>Learn To Build Cool Tech <span class="text-warning">Stuffs Without Hiring a Developer</span></h3>
              <p class="lead my-4">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat a, enim velit, fugit hic accusantium saepe id impedit esse quam atque suscipit dolorum ab.
              </p>
              <button  class="btn btn-primary btn-lg"
              data-bs-toggle="modal"
              data-bs-target="#enroll">
                Enroll Now
              </button>
            </div> -->
            <!-- <img class="img-fluid w-50 h-40 " src="{{asset('image/assets/showcase.svg')}}"  alt=""> -->
              <div class="leftside">
                <h2>Welcome to DigitMoni <span id="colored">Free Crypto Course</span></h2>
              </div>
              <form action="" method="post">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
              </form>
            
          </div>
      </div>
    </div>
    <!-- end -->
    <div class="left-side">

    </div>
    <div class="right-side">
      <form action="" method="post">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
      </form>
    </div>
  </div>
</main>
@endsection