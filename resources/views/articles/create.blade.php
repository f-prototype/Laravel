@extends('layout')
@section('content')
<form action="/article" method="post">
@csrf
  <div class="form-group">
    <label for="exampleDateName1">Date public:</label>
    <input name="datePublic" type="date" class="form-control" id="exampleDateName1">
  </div>
  <div class="form-group">
    <label for="exampleInputTitle1">Title:</label>
    <input name="title" type="text" class="form-control" id="exampleInputTitle1">
  </div>
  <div class="form-group">
    <label for="exampleInputShortDesc1">Short description</label>
    <input name="shortDesc" type="text" class="form-control" id="exampleInputShortDesc1">
  </div>
  <div class="form-group">
    <label for="exampleInputDesc1">Description</label>
    <textarea name="desc" class="form-control">
    </textarea>

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection