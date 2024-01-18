<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update testimonial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Update Testimonial data</h2>
  <form action="{{route('update',$testimonials->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="clientname">clientname:</label>
      <textarea type="text" class="form-control" id="" placeholder="Enter clientname" name="clientname" value= "{{$testimonials->clientname}}"> </textarea>
      
    </div>
    <div class="form-group">
      <label for="profession">Profession:</label>
      <textarea class="form-control" name="profession" id="" cols="60" rows="3" value="{{$testimonials->profession}}"></textarea>
    </div>
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" name="comment" id="" cols="60" rows="3" value="{{$testimonials->comment}}"></textarea>
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image"><image src="{{asset('Assets/img/'.$testimonials->image)}}">
        <input type="hidden" name="oldImage" value="{{$testimonials->image}}">
      @error('image')
        {{ $message }}
      @enderror
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>