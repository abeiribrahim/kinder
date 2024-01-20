@include('admin.includes.nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Teacher</title>
</head>
<body>
<div class="container">
  <h2>Show Teacher data</h2>
  <form action="{{route('showteacher',$teachers->id)}}" method="post">
    @csrf
    <h1>{{$teachers->ocuupation}}</h1>
    <h1>{{$teachers->tname}}</h1>
    <h1>{{$teachers->facebooke}}</h1>
    <h1>{{$teachers->twiter}}</h1>
    <h1>{{$teachers->instagrame}}</h1>
    <h1><img src=" {{ asset ('/assets/img/'. $teachers->image ) }} "></h1>
    <h1>{{$teachers->active}}</h1>

    
    </div>
</body>
</html>