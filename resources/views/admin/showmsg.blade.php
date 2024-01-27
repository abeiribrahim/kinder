@include('admin.includes.nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show messages</title>
</head>
<body>
<div class="container">
  <h2>Show messages data</h2>
  <form action="{{route('showmsg',$contacts->id)}}" method="post">
    @csrf
    <h1>{{$contacts->from}}</h1>
    <h1>{{$contacts->email}}</h1>
    <h1>{{$contacts->subject}}</h1>
    <h1>{{$contacts->message}}</h1>
    <h1>{{$contacts->unread_count}}</h1>
    

    
    </div>
</body>
</html>