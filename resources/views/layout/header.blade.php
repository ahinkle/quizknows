<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quiz Knows</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css" media="all" />
    @yield('additional-css')

    <link rel="icon" href="{{ asset('img/quiznos_icon.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('img/quiznos_icon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('img/quiznos_icon.png') }}" />

</head>