@extends('master')

@section('content')


<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">City Data</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{route('city.create')}}" class="btn btn-primary">Add</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>Name</th>
    <th>Country Code</th>
    <th>District</th>
    <th>Population</th>
    <th>Edit</th>
    <th>Delete</th>
   </tr>
   @php
$count = 0
@endphp
   
   @foreach($cities as $row)
   @php
$count++
@endphp
   
   <tr>
    <td>{{$row['name']}}</td>
    <td>{{$row['countrycode']}}</td>
    <td>{{$row['district']}}</td>
    <td>{{$row['population']}}</td>
    <td><a href="{{action('CityaddController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
    <td><form method="post" class="delete_form" action="{{action('CityaddController@destroy', $row['id'])}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE" />
        <button type="submit" class="btn btn-danger">Delete</button>
       </form></td>
   </tr>
   @if ($count  == 20)
        @break
    @endif
   @endforeach
  </table>
 </div>
</div>

@endsection