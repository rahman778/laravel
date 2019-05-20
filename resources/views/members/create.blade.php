@extends('layouts.app')

@section('content')

<h2 class="text-center">Add a new member</h2>

<form method="POST" action="/members" style="width:50%; margin-left: 25%;">
{{ csrf_field() }}


    <div class="form-group "><i class="fas fa-user"></i>
          <label for="company-name">Name</label>
          <input type="" class="form-control" id="company-name" name="name" value="{{old('name')}}"  placeholder="Enter Name" >
    </div>

    <div class="form-group"><i class="fas fa-address-card"></i>
          <label for="company-name">Address</label>
          <input type="" class="form-control" id="" name="address" value="{{old('address')}}"  placeholder="Enter Address" >
    </div>

    <div class="form-group"><i class="fas fa-phone"></i>
          <label for="company-name">Telephone</label>
          <input type="" class="form-control" id="" name="Tp" value="{{old('Tp')}}"  placeholder="Contact Number" >
    </div>

    <div class="form-group"><i class="fas fa-user-plus"></i>
        <label for="exampleFormControlSelect1">Position</label>
        <select class="form-control" id="" name="position">
        <option>Web designer</option>
        <option>Graphic designer</option>
        <option>Web developer</option>
        <option>Wordpress developer</option>
        <option>Fullstack developer</option>
        </select>
    </div>

    <div class="form-group"><i class="fas fa-calendar-week"></i>
          <label for="company-name">Joined Date</label>
          <input type="date" class="form-control" id="company-name" name="joined_at" value="{{old('joined_at')}}"  placeholder="Date" >
    </div>    
        
        <button type="submit" class="btn btn-primary pull-right">Add</button>
</form>
<br>
<br>


@endsection