@extends('layouts.admin')

@section('head')
<title>DigitMoni | Admin</title>
<link rel="stylesheet" href="{{asset('dashboard/home/home.css')}}">
<style>
  svg{
    width: 3rem !important;
    height: 3rem !important;
  }
  .shadow-sm{
    display: none !important;
  }
</style>
@endsection 

@section('content')
<main>
  <div class="container">
    @include('admin.users._users_table')
  </div>
</main>
@endsection 