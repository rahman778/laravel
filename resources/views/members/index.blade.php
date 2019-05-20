@extends('layouts.app')

@section('content')

<h1  class="text-center"> Our Employees </h1>
<div class="text-center"><a href="/members/create"><button type="button" class="btn rd btn-success" >Add</button></a></div>

<table class="table table-striped">
  <thead class="thead" style="background-color: #555; color: white;">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Telephone</th>
      <th scope="col">Position</th>
      <th scope="col">Joined Date</th>
      <th  colspan="2">Actions</th>
    </tr>
  </thead>
  @foreach($members as $member)
  <tbody>
    <tr>
      <th scope="row">{{$member->id}}</th>
      <td>{{$member->name}}</td>
      <td>{{$member->address}}</td>
      <td>{{$member->Tp}}</td>
      <td>{{$member->position}}</td>
      <td>{{$member->joined_at}}</td>
      <td><a href="/members/{{$member->id}}/edit"><button type="button" class="btn btn-info">Edit</button></a></td>
      <td><form id="delete-form" method="POST" action="/members/{{$member->id}}">
                {{ csrf_field() }}
                {{method_field('DELETE')}}
                <a   
              href="#"
                  onclick="
                  var result = confirm('Are you sure you wish to delete this project?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                          >
                          <button type="button" class="btn btn-danger">Delete</button>
              </a>
                </form></td>
    </tr>
    
  </tbody>
  @endforeach
</table>



@endsection