@include('admin.includes.nav')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Teacher</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Add new Teacher</h2>
  <form action="{{route('storeteacher')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="occupation">Occupation:</label>
      <input type="text" class="form-control" id="occupation" placeholder="Enter occupation" name="occupation" >
      @error('occupation')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="tname">Name:</label>
      <input type="text" class="form-control" id="tname" placeholder="Enter tname" name="tname" >
      @error('tname')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="facebook">Facebook:</label>
      <textarea class="form-control" name="facebook" id="" cols="60" rows="3" ></textarea>
      @error('facebook')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="twiter">Twiter:</label>
      <textarea class="form-control" name="twiter" id="" cols="60" rows="3"></textarea>
      @error('twiter')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="instagram">Instagram:</label>
      <input type="text" class="form-control" id="instagram" placeholder="Enter instagram" name="instagram" >
      @error('instagram')
      {{$message}}
      @enderror
    </div>
   <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
      @error('image')
        {{ $message }}
      @enderror
      <div class="checkbox">
      <label><input type="checkbox" name="active"> Active</label>
    </div>

    <button type="submit" class="btn btn-default">Insert</button>
  </form>
</div>

</body>
</html>
