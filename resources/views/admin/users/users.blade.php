@extends('layouts.admin')

@section('head')
<title>DigitMoni | Admin</title>
<link rel="stylesheet" href="{{asset('dashboard/home/home.css')}}">
@endsection 

@section('content')
<main>
  <div class="container">
    @include('admin.users._users_table')
  </div>
</main>
@endsection 