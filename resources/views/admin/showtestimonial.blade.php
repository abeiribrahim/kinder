@include('admin.includes.nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show testimonial</title>
</head>
<body>
<div class="container">
  <h2>Show testimonial data</h2>
  <form action="{{route('showtestimonial',$testimonials->id)}}" method="post">
    @csrf
    <h1>{{$testimonials->clientname}}</h1>
    <h1>{{$testimonials->profession}}</h1>
    <h1>{{$testimonials->comment}}</h1>

    
    </div>
</body>
</html>