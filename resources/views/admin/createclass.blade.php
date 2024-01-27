@include('admin.includes.nav')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Class</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Add new Class</h2>
  <form action="{{route('storeclass')}}" method="post" enctype="multipart/form-data">
    @csrf
   
    <div class="form-group">
      <label for="kcname">Class:</label>
      <input type="text" class="form-control" id="kcname" placeholder="Enter kcname" name="kcname" >
      @error('kcname')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="age">age:</label>
      <textarea class="form-control" name="age" id="age" cols="60" rows="3" ></textarea>
      @error('age')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
     
      <label for="teacherId">Teacher:</label>
      <select name="teacherId" id="">
        <option value="">Select Teacher</option>
        @foreach($teachers as $teacher)
      
      <option value="{{$teacher->id}}">{{$teacher->tname}}</option>
        @endforeach
      </select>
      @error('teacherId')
      {{$message}}
      @enderror
    </div>
    
    <div class="form-group">
      <label for="capacity">Capacity:</label>
      <input type="text" class="form-control" id="capacity" placeholder="Enter capacity" name="capacity" >
      @error('capacity')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter price" name="price" >
      @error('price')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="time">Time:</label>
      <input type="time" class="form-control" id="time" placeholder="Enter time" name="time" >
      @error('time')
      {{$message}}
      @enderror
    </div>
   <div class="form-group">
      <label for="class_image">Image:</label>
      <input type="file" class="form-control" id="class_image" placeholder="Enter image" name="class_image">
      @error('class_image')
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
