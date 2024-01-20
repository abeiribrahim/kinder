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
  <h2>testimonials</h2>
  <p>HERE IS A TABLE WITH ALL testimonial TYPES:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>clientname</th>
        <th>profession</th>
        <th>comment</th>

        <th>image</th>
        <th>Edit</th>
        <th>show</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($testimonials as $testimonial)
        <td>{{$testimonial->clientname}}</td>
        <td>{{$testimonial->profession}}</td>
        <td>{{$testimonial->comment}}</td>

          
            <td><img src=" {{ asset ('/assets/img/'. $testimonial->image ) }} " alt="image" style="width:75px"></td>
            <td><a href="updatetestimonial/{{ $testimonial->id }}">Edit</a></td>
            <td><a href="showtestimonial/{{ $testimonial->id }}">show</a></td>
            <td><a href="deletetestimonial/{{ $testimonial->id }}"onclick = "return confirm('Are you sure you want to delete?')"; >Delete</a></td>
        
      </tr>

    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>