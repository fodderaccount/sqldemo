<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
@foreach ($users as $key =>$value )
    <tr><td>{{$key+1}}</td>
    <td>{{$value->username}}</td></tr>
<td>{{$value->email}}</td>
@endforeach