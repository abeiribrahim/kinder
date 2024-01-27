<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Class</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update Class data</h2>
  <form action="{{route('update',$kclasses->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="kcname">Class:</label>
      <textarea type="text" class="form-control" id="" placeholder="Enter class" name="kcname" value= "{{old('$kclasses->kcname')}}">{{$kclasses->kcname}} </textarea>
      
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <textarea class="form-control" name="age" id="" cols="60" rows="3" >{{$kclasses->age}}</textarea>
    </div>
    <div class="form-group">
      <label for="capacity">Class Capacity:</label>
      <textarea type="text" class="form-control" id="" placeholder="Enter capacity" name="capacity" value= "{{old('$kclasses->capacity')}}">{{$kclasses->capacity}} </textarea>
      </div>
      <div class="form-group">
      <label for="time">Time:</label>
      <input type="time" class="form-control" id="time" placeholder="Enter time" name="time" >
    </div>
   
    <div class="form-group">
      <label for="price">price:</label>
      <textarea type="text" class="form-control" id="" placeholder="Enter price" name="price" value= "{{old('$kclasses->price')}}">{{$kclasses->price}} </textarea>
      
    </div>
    <div class="form-group">
      <label for="class_image">Image:</label>
      <input type="file" class="form-control" id="class_image" placeholder="Enter class_image" name="class_image"><image src="{{asset('Assets/img/'.$kclasses->class_image)}}">
        <input type="hidden" name="oldImage" value="{{$kclasses->class_image}}">
      @error('class_image')
        {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="teacherId">Teacher:</label>
    <select name="teacherId" id="">
    @foreach ($teachers as $teacher)
 
        <option value="{{$teacher->id}}" {{$teacher->id == $kclasses->teacherId  ? 'selected' : ''}}>{{$teacher->tname}}</option>
    @endforeach
</select>
      @error('teacherId')
        {{ $message }}
      @enderror
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="active" @checked($kclasses->active)> Status</label>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>

   