@include('\admin.includes.nav')
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
  <h2>Classs</h2>
  <p>HERE IS A TABLE WITH ALL Classs :</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        
        <th>Teacher</th>
        <th>Class</th>
        <th>Age</th>
        <th>Time</th>
        <th>Capacity</th>
        <th>Price</th>
        <th>Status</th>
        

        <th>image</th>
        <th>Edit</th>
        <th>show</th>
        <th>Delete</th>
      </tr>                                    
    </thead>
    <tbody>
      <tr>
        @foreach($kclasses as $class)
        <td>{{$class->teacherId}}</td>
        <td>{{$class->kcname}}</td>
        
        <td>{{$class->age}}</td>
        <td>{{$class->time}}</td>
        <td>{{$class->capacity}}</td>
        <td>{{$class->price}}</td>
        <td>{{$class->active}}</td>

          
            <td><img src=" {{ asset ('/assets/img/'. $class->class_image) }} " alt="image" style="width:75px"></td>
            <td><a href="updateclass/{{ $class->id }}">Edit</a></td>
            <td><a href="showclass/{{ $class->id }}">show</a></td>
            <td><a href="deleteclass/{{ $class->id }}"onclick = "return confirm('Are you sure you want to delete?')"; >Delete</a></td>
        
      </tr>

    @endforeach
    </tbody>
  </table>
</div>

</body>
</html> 