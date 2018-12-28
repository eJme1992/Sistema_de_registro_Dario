<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> @yield('cabezera')
</head>
<style type="text/css">
    .form-control{
        margin-top:5px;
        margin-bottom:5px;
    }
</style>


<body>
    <div class="container">
        <div class="panel panel-primary">

            <div id="vacio" class="panel-heading center-block">
                <h3 id="titulo">@yield('titulo-xl')</h3>
                <h4 id="titulo">@yield('titulo-md')</h4>
            </div>

            <div id="raya" class="center-block"></div>

            <div id="negro" class="center-block">@yield('subtitulo')</div>
            <div class="panel-body">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>

​