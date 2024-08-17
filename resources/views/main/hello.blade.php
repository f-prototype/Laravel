@extends('layout')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col">shortDesk</th>
      <th scope="col">Desk</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach($articles as $article)
    <tr>
      <th scope="row">{{$article['date']}}</th>
      <td>{{$article['name']}}</td>
      <td>{{$article['shortDesc']}}</td>
      <td>{{$article['desc']}}</td>
      <td><a href="/galery/{{$article['full_image']}}"><img src="{{URL::asset('images/'.$article['preview_image'])}}" height="100px"/></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection