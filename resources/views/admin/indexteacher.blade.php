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
  <h2>Teachers</h2>
  <p>HERE IS A TABLE WITH ALL teachers :</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        
        <th>occupation</th>
        <th>Name</th>
        <th>facebook</th>
        <th>twiter</th>
        <th>Instagram</th>
        <th>Status</th>

        <th>image</th>
        <th>Edit</th>
        <th>show</th>
        <th>Delete</th>
      </tr>                                    
    </thead>
    <tbody>
      <tr>
        @foreach($teachers as $teacher)
        <td>{{$teacher->occupation}}</td>
        <td>{{$teacher->tname}}</td>
        
        <td>{{$teacher->facebook}}</td>
        <td>{{$teacher->twiter}}</td>
        <td>{{$teacher->instagram}}</td>
        <td>{{$teacher->active}}</td>
          
            <td><img src=" {{ asset ('/assets/img/'. $teacher->image ) }} " alt="image" style="width:75px"></td>
            <td><a href="updateteacher/{{ $teacher->id }}">Edit</a></td>
            <td><a href="showteacher/{{ $teacher->id }}">show</a></td>
            <td><a href="deleteteacher/{{ $teacher->id }}"onclick = "return confirm('Are you sure you want to delete?')"; >Delete</a></td>
        
      </tr>

    @endforeach
    </tbody>
  </table>
</div>

</body>
</html> 
