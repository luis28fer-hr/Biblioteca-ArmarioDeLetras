<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="{{ URL::asset('header.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('footer.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('inicio.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('registrar.css') }}" rel="stylesheet" />


</head>
<body class="bg-light text-dark">


    <header>@include('temporales.nav')</header>
    <main>@yield('contenido')</main>
    <footer>@include('temporales.footer')</footer>


{{--     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 --}}</body>
</html>
