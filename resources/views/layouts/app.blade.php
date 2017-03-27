<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://raw.githubusercontent.com/nnnick/Chart.js/master/dist/Chart.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.3/angular.min.js"></script>
    <script type="text/javascript" src="http://www.google.com/jsapi?ext.js"></script>
    <script src="https://code.highcharts.com/highcharts.src.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>

<div class="content">
    <div class="title m-b-md">
        @yield('content')
    </div>


</div>
</body>
</html>