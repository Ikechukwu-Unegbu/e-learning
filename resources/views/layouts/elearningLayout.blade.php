<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
        /* main{
  background-color: red;
} */
.course-holder{
  display: flex;
  flex-direction: row;
  justify-content: center;
  /* align-items: center; */
}

.details{
  display: flex;
  justify-content:space-between;
}

.course_left{
  width: 60%;
} 
.course_right{
width: 40%;
padding-top: 5.2rem;
padding-left: 5rem;
}

.leave_comment{
  width: 100% !important;

}
.form{
  display: flex;
  flex-direction: column;
  grid-gap: 1.4rem;
  justify-content: center;
}
.comment{
  height: 15vh;
  /* border-style: none; */

}

.course_left img{
  width: 100%;
}

.title{
  font-size: larger;
  font-weight: bolder;
}

#playing{
  color: #B40000;
}
.d-md-flex{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  /* align-items: center; */
  grid-gap: 8rem;
}
.reactangle{
  /* height:7rem;
  width:7rem; */
  display: flex;
  flex-direction: row;
  grid-gap: 1.3rem;
  width: 100%;
  box-shadow: 0 0 5px gray;
  padding: .5rem;

  border-radius: 5px;
  margin-bottom: 1rem;
}

video{
  width: 100% !important;
  height: 50vh !important;
}

.reactangle img{
  width:6rem;
  height: 6rem;
  } 


  @media (max-width:1000px) {
    .course-holder{
      display: flex;
      flex-direction: column;
    }
    .course_right{
      width:100%;
      margin-left: 0;
      padding-left: 0;
    }

    .course_left{
      width: 100%;
      float: left;
     
    }
  }

  @media (max-width:650px) {
    .course-holder{
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .course_right{
      width:100%;
      margin-left: 0;
      padding-left: 0;
    }

    .course_left{
      width: 100%;
      float: left;
     
    }

  }

      </style>
    <!-- Bootstrap CSS -->
    @yield('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hello, world!</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    @include('layouts.elearningNav')

    @yield('content')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>