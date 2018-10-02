<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cashier App</title>

    {{-- CSS --}}
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

    {{--HEADER--}}
    <div id="site-header">
        @include('partials.header')
    </div>

    {{--MAIN--}}
    <main id="site-main">
        @yield('content')
    </main>


    {{--FOOTER--}}
    <div id="site-footer">
        @include('partials.footer')
    </div>

{{-- JS --}}
<script src="js/app.js"></script>
</body>
</html>