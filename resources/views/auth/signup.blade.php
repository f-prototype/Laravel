@extends('layout')
@section('content')
<form action="/auth/signUp" method="post">
@csrf
  <div class="form-group">
    <label for="exampleInputName1">Your name:</label>
    <input name="name" type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address:</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">SignUp</button>
</form>
@endsection