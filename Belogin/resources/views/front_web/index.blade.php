<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Tutorials</title>
    <!-- Styles -->
     <link rel="stylesheet" href="{{URL::to('/')}}/webassets/ajaxMenu/bootstrap.min.css">
</head>
<body>
<style>
    .loading {
        background: lightgoldenrodyellow url('{{asset('images/processing.gif')}}') no-repeat center 65%;
        height: 80px;
        width: 100px;
        position: fixed;
        border-radius: 4px;
        left: 50%;
        top: 50%;
        margin: -40px 0 0 -50px;
        z-index: 2000;
        display: none;
    }
</style>
<div class="container-fluid">
    <div class="row"></div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Header</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="javascript:ajaxLoad('{{url('front_web/hotel')}}')">View 1</a></li>
                            <li><a href="javascript:ajaxLoad('{{url('front_web/fusion')}}')">View 2</a></li>
                            <li><a href="javascript:ajaxLoad('{{url('front_web/view3')}}')">View 3</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
            <div id="content">click any menu above to change content here</div>
            <div class="loading"></div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<!-- JavaScripts -->
<script type="text/javascript" src="{{URL::to('/')}}/webassets/ajaxMenu/bootstrap.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/webassets/ajaxMenu/jquery-1.11.2.min.js"></script>
<script>
    function ajaxLoad(filename, content) {
        content = typeof content !== 'undefined' ? content : 'content';
        $('.loading').show();
        $.ajax({
            type: "GET",
            url: filename,
            contentType: false,
            alert();
            success: function (data) {
                $("#" + content).html(data);
                $('.loading').hide();
            },
            error: function (xhr, status, error) {

                alert(xhr.responseText);
            }
        });
    }
</script>
</body>
</html>