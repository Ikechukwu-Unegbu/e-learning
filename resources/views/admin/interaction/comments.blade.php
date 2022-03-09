@extends('layouts.admin')

@section('head')
<title>DigitMoni | Admin</title>
<link rel="stylesheet" href="style.css">
@endsection

@section('content')
<main>
  <div class="container">
    <h3 class="mt-4 mb-5">User Comments Unpublished</h3>
    @foreach($comments as $comment)
      <div class="mt-3">
        <br>
        <div class="">
          {!!$comment->comment!!}
          <br/>
          <span>by: </span><span>{{$comment->user->name}}</span>
        </div>
        <div class="">
          <span class="badge bg-secondary">{{$comment->mode}}</span> <a href="" class="btn btn-sm btn-success">Publish</a>  <a href="" class="btn btn-sm btn-danger">Delete</a>
        </div>
      </div>
    @endforeach
  </div>
</main>
@endsection 