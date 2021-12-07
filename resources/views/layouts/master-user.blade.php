<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link id="pagestyle" href="{{asset('assets/css/soft-ui-dashboard.css')}}" rel="stylesheet"/>

    <link id="pagestyle" href="{{asset('assets/css/app.css')}}" rel="stylesheet"/>

</head>

<body class="bg-gray-100">
<!-- Sidebar -->
@include('layouts.includes.navbar')
@yield('content')
@include('layouts.includes.js')
</body>

</html>
