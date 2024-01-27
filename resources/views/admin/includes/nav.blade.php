<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="indextestimonial">Testimonials</a></li>
      <li><a href="createtestimonial">New testimonial</a></li>
     
      <li class="active"><a href="indexappointment">Appointments</a></li>
      <li class="active"><a href="indexteacher">Teachers</a></li>
      <li><a href="createteacher">New teacher</a></li>
      <li class="active"><a href="indexclass">Classes</a></li>
      <li><a href="createclass">New class</a></li>
     
      <li class="active"><a href="indexmsg">messages</a></li>
   
      </div>
     <a href="{{ route('indexmsg') }}" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Unread : {{$unread}}<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
    </ul>
  </div>
</nav>