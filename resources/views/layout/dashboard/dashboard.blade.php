<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @stack('styles')
</head>

<body style="background-color: rgba(96, 220, 166, 0.874)">
    <h1 class="head1">Fadl Al-Obaid </h1>
    <div class="content m-1 p-2">
        <!----------------------------navbar----------------------->
        @include('layout.dashboard.navbar')
        <!----------------------------navbar----------------------->

        <!----------------------------breadcrumb----------------------->
        <nav aria-label="breadcrumb mt-1">
            <ol class="breadcrumb">
                @section('breadcrumb')
                    <li class="breadcrumb-item"><a href="{{ route('libraries.index') }}">Home</a></li>

                @show


            </ol>
        </nav>
        <!----------------------------breadcrumb----------------------->


        <!----------------------------Main----------------------->
        <div class="section mt-2">
            @yield('content')
        </div>
        <!----------------------------Main----------------------->
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</body>

</html>
