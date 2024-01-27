@include('admin.includes.nav')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Testimonial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Add new Testimonial</h2>
  <form action="{{route('storetestimonial')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="clientname">Title:</label>
      <input type="text" class="form-control" id="clientname" placeholder="Enter clientname" name="clientname" value="{{old('clientname')}}">
      @error('clientname')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="profession">profession:</label>
      <textarea class="form-control" name="profession" id="" cols="60" rows="3"value="{{old('profession')}}" ></textarea>
      @error('profession')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="comment">comment:</label>
      <textarea class="form-control" name="comment" id="" cols="60" rows="3"value="{{old('comment')}}" ></textarea>
      @error('comment')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image" value="{{old('image')}}">
      @error('image')
        {{ $message }}
      @enderror

      </select>
      @error('category_id')
        {{ $message }}
      @enderror
    </div>

    <button type="submit" class="btn btn-default">Insert</button>
  </form>
</div>

</body>
</html>