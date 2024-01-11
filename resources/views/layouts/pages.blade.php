<!DOCTYPE html>
<html lang="en">

<body>
@include('includes.head')     
  @include('includes.spinner')
        @include('includes.navbar')
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
@include('includes.js')
</body> 

</html>