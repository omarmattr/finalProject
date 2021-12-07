<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link id="pagestyle" href="{{asset('assets/css/soft-ui-dashboard.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet"/>
    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/nucleo-icons.css')}}}" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet"/>
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('assets/css/soft-ui-dashboard.css')}}" rel="stylesheet"/>
    <!-- Alpine -->

    <style>
    </style>
</head>

<body class="bg-gray-100">
<div id="wrapper">
    <!-- Sidebar -->
    @include('layouts.includes.head')
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <a href="#" class="btn" id="menu-toggle"><i class="fa fa-bars"></i></a>
            @yield('content')
        </div>
    </div>
</div>


@include('layouts.includes.js')

<script>
    $(document).ready(function(){
        $("#menu-toggle").click(function(e){
            e.preventDefault();
            $("#wrapper").toggleClass("menuDisplayed");
        });
    });

</script>
<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>

</body>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</html>
