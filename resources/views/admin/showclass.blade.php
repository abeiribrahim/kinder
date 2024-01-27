<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show class</title>
</head>
<body>
<div class="container">
  <h2>Show class data</h2>
  <form action="{{route('showclass',$kclasses->id)}}" method="post">
    @csrf
    <h1>{{$kclasses->price}}</h1>
    <h1>{{$kclasses->kcname}}</h1>
    <h1>{{$kclasses->age}}</h1>
    <h1>{{$kclasses->time}}</h1>
    <h1>{{$kclasses->capacity}}</h1>
    <h1>{{$kclasses->created_at}}</h1>
    <h1>{{$kclasses->updated_at}}</h1>
    <p>{{$kclasses->active? "active" : "Not active" }}</p>
    
    
    </div>
</body>
</html>
      
    