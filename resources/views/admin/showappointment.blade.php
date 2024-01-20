@include('admin.includes.nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show appointment</title>
</head>
<body>
<div class="container">
  <h2>Show appointment data</h2>
  <form action="{{route('showappointment',$appointments->id)}}" method="post">
    @csrf
    <h1>{{$appointments->gname}}</h1>
    <h1>{{$appointments->gmail}}</h1>
    <h1>{{$appointments->cname}}</h1>
    <h1>{{$appointments->cage}}</h1>
    <p>{{$appointments->message}}</p>
    <p>{{$appointments->created_at}}</p>
    
    </div>
</body>
</html>