<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="indextestimonials">Home</a></li>
      <li><a href="createtestimonial">inserttestimonial</a></li>
      <li><a href="trashedtestimonials">Trashedtestimonial</a></li>
      <li class="active"><a href="appointment">Home</a></li>
      <li><a href="showappointment">insertappointment</a></li>
      <li class="active"><a href="indexteacher">Home</a></li>
      <li><a href="createteacher">insertteacher</a></li>
      <li><a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a></li>
      
      <li><a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">عربي</a></li>
    </ul>
  </div>
</nav>