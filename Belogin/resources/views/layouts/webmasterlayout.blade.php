<!DOCTYPE html>
<html lang="en">
@include('includeweb.header')

<body>

@include('includeweb.headerMenu')

    <!--main content start-->

            <!-- page start-->

           @yield('content')

            <!-- page end-->

    <!--main content end-->


<!-- Placed js at the end of the document so the pages load faster -->
@include('includeweb.footer')

</body>
</html>
