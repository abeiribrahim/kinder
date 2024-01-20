@include('admin.includes.nav')
<!DOCTYPE html>
<html lang="en">
<head>
<form action="" method="post" enctype="multipart/form-data">
    @csrf
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>appointments</h2>
  <p>HERE IS A TABLE WITH ALL appointment TYPES:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
      <th>Gauardian Name</th>
        <th>Gauardian Mail</th>
        <th>Chiled Name</th>
        <th>Chiled Age</th>
        <th>Messages</th>
        <th>created_at</th>
       
        
        <th>show</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($appointments as $appointment)
        <td>{{$appointment->gname}}</td>
        <td>{{$appointment->gmail}}</td>
        <td>{{$appointment->cname}}</td>
        <td>{{$appointment->cage}}</td>
        <td>{{$appointment->message}}</td>
        <td>{{$appointment->created_at}}</td>
       
            <td><a href="showappointment/{{ $appointment->id }}">show</a></td>
            <td><a href="deleteappointment/{{ $appointment->id }}"onclick = "return confirm('Are you sure you want to delete?')"; >Delete</a></td>
        
      </tr>

    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>