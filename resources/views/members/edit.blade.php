@extends('layouts.app')

@section('content')

  
        <form method=POST action="/members/{{$member->id}}">
        {{ csrf_field() }}
        {{method_field('PATCH')}}

        <div class="form-group">
          <label for="member-name">Name</label>
          <input type="" class="form-control" id="" name="name" value="{{$member->name}}"  placeholder="Enter Name">
          
        </div>
        <div class="form-group">
          <label for="member-name">Address</label>
          <input type="" class="form-control" id="" name="address" value="{{$member->address}}"  placeholder="Enter Address" >
        </div>

        <div class="form-group">
            <label for="member-name">Telephone</label>
            <input type="" class="form-control" id="" name="Tp" value="{{$member->Tp}}"  placeholder="Contact Number" >
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Position</label>
            <select class="form-control" id="" name="position">
            <option>Web designer</option>
            <option>Graphic designer</option>
            <option>Web developer</option>
            <option>Wordpress developer</option>
            <option>Fullstack developer</option>
            </select>
        </div>

        <div class="form-group">
            <label for="member-name">Joined Date</label>
            <input type="date" class="form-control" id="member-name" name="joined_at" value="{{$member->joined_at}}"  placeholder="Date" >
        </div>    
            
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
                
      @endsection