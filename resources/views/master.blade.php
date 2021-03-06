<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
 
    <style> 
    /*
    background-image: url("http://genchi.info/image/full-hd-wallpapers-1920x1080-7.jpg");
    */
    .navbar {
          margin-bottom: 50px;
          border-radius: 0;
        }
    .jumbotron {
          margin-bottom: 0;
        }
        footer {
          background-color: #f2f2f2;
          padding: 25px;
        }
    body {
      /* Remove the jumbotron's default bottom margin */ 
        background-repeat: no-repeat, repeat;
            background-color: #cccccc;
        /* Add a gray background color and some padding to the footer */
        /*     background-color: #cccccc; */
    }
    .error {color: #FF0000;}
    </style>
<div class="jumbotron">
    <div class="container text-center">
      <h1>City / Country</h1>      
    </div>
  </div>
  
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li ><a href="{{ url('/home') }}">Home</a></li>
          <li ><a href="{{ url('/city') }}">Cities</a></li>
          <li ><a href="{{ url('/country') }}">Countries</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        </ul>
      </div>
    </div>
  </nav>
</div>
 
</body>
</html>
<div class="container">
   @yield('content')
   