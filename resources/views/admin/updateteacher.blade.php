@include('admin.includes.nav')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Teacher</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Update Teacher Data</h2>
  <form action="{{route('update',$teachers->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="occupation">Occupation:</label>
      <textarea type="text" class="form-control" id="" placeholder="Enter occupation" name="occupation" value= "{{old('$teachers->occupation')}}">{{$teachers->occupation}} </textarea>
      
    </div>
    <div class="form-group">
      <label for="tname">Name:</label>
      <textarea class="form-control" name="tname" id="" cols="60" rows="3" value="{{old('$teachers->tname')}}">{{$teachers->tname}}</textarea>
    </div>
    <div class="form-group">
      <label for="facebook">Facebook:</label>
      <textarea class="form-control" name="facebook" id="" cols="60" rows="3" value="{{old('$teachers->facebook')}}">{{$teachers->facebook}}</textarea>
    </div>
    <div class="form-group">
      <label for="twiter">Twiter:</label>
      <textarea class="form-control" name="twiter" id="" cols="60" rows="3" value="{{old('$teachers->twiter')}}">{{$teachers->twiter}}</textarea>
    </div>
    <div class="form-group">
      <label for="instagram">Instagram:</label>
      <textarea class="form-control" name="instagram" id="" cols="60" rows="3" value="{{old('$teachers->instagram')}}">{{$teachers->instagram}}</textarea>
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image"><image src="{{asset('Assets/img/'.$teachers->image)}}">
        <input type="hidden" name="oldImage" value="{{old('$teachers->image')}}">
      @error('image')
        {{ $message }}
      @enderror
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="active"> Active</label>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>

