<!DOCTYPE html>
<html lang="en">
@include('include.header')

<body>

<section id="container" >
@include('include.headerMenu')
@include('layouts.sidebar')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->

           @yield('content')

            <!-- page end-->
        </section>
    </section>
    <!--main content end-->

</section>

<!-- Placed js at the end of the document so the pages load faster -->
@include('include.footer')

</body>
</html>
