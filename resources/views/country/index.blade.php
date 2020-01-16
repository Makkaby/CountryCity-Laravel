<!doctype html>
<html>
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initialscale=1">
 <title>Countries</title>
 </head>
 <body>
 <table>
 <thead>
 <tr><th>Country</th></tr>
 </thead>
 <tbody>
 @foreach ($country as $c)
 <tr>
 <td>{{$c->name}}</td>
 </tr>
 @endforeach
 </tbody>
 </table>
 </body>
</html>
<?php
