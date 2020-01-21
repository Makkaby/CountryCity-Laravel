@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Country Data</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>Code</th>
    <th>Name</th>
    <th>Continent</th>
    <th>Surfacearea</th>
    <th>Indepyear</th>
    <th>Population</th>
    <th>Lifeexpectancy</th>
    <th>Gnp</th>
    <th>Gnpold</th>
    <th>Localname</th>
    <th>Governmentform</th>
    <th>Headofstate</th>
    <th>Capital</th>
    <th>Code2</th>

   </tr>

   @php
$count = 0
@endphp
   @foreach($sorted as $row)
   
   @php
$count++
@endphp
   <tr>
    <td>{{$row['code']}}</td>
    <td>{{$row['name']}}</td>
    <td>{{$row['continent']}}</td>
    <td>{{$row['surfacearea']}}</td>
    <td>{{$row['indepyear']}}</td>
    <td>{{$row['population']}}</td>
    <td>{{$row['lifeexpectancy']}}</td>
    <td>{{$row['gnp']}}</td>
    <td>{{$row['gnpold']}}</td>
    <td>{{$row['localname']}}</td>
    <td>{{$row['governmentform']}}</td>
    <td>{{$row['headofstate']}}</td>
    <td>{{$row->capital['name']}}</td>
    <td>{{$row['code2']}}</td>
   </tr>
   @if ($count  == 10)
        @break
    @endif
    
   @endforeach
  </table>
 </div>
</div>
@endsection

