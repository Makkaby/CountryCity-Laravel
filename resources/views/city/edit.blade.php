@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Record</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('CityaddController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="name" class="form-control" value="{{$city->name}}" placeholder="Enter Name" />
   </div>
   <div class="form-group">
    <input type="text" name="countrycode" class="form-control" value="{{$city->countrycode}}" placeholder="Enter Country Code" />
   </div>
   <div class="form-group">
    <input type="text" name="district" class="form-control" value="{{$city->district}}" placeholder="Enter District" />
   </div>
   <div class="form-group">
    <input type="text" name="population" class="form-control" value="{{$city->population}}" placeholder="Enter Population" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>

@endsection