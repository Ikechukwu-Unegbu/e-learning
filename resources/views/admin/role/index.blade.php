@extends('layouts.admin')

@section('head')
<title>DigitMoni | Admin</title>
<link rel="stylesheet" href="{{asset('dashboard/home/home.css')}}">
@endsection 

@section('content')
<main>
  <div class="container">
    @include('admin.role._roles_table')
  </div>
</main>
@endsection 