@extends('layout.master')

@section('content')
@include('layout.partials.header-right',['name'=>'CREATE','key'=>'NEW USER'])
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link href="{{ asset('css/create-user.css') }}" rel="stylesheet">
<form action="{{ route('setting.user.store') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="icon">
        <i class="fas fa-user-circle"></i>
      </div>
      <div class="formcontainer">
      <div class="container">
        <label for="uname"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Username" name="name" required>
        <label for="mail"><strong>E-mail</strong></label>
        <input type="text" placeholder="Enter E-mail" name="email" required>
        <label for="psw"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="password" required>
      </div>
      <button type="submit"><strong>CONFIRM</strong></button>
      
</form>
@endsection