<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>cpb.Md - Combinatul de paine din Balti</title>
    <meta name="description" content="cpb.Md - Combinatul de paine din Balti" />
    <meta name="keywords" content="cpb, balti, paine" />
    <meta name="application-name" content="cpb.Md"/>


    <link rel="canonical" href="http://cpb.md/" />
    <meta property="og:locale" content="ro_RO" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="cpb.md - Combinatul de paine din Balti" />
    <meta property="og:description" content="cpb.Md - Combinatul de paine din Balti" />
    <meta property="og:url" content="http://cpb.md/" />
    <meta property="og:site_name" content="cpb.Md - Combinatul de paine din Balti" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="cpb.Md - Combinatul de paine din Balti" />
    <meta name="twitter:title" content="cpb.Md - Combinatul de paine din Balti" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
    <div id="app">

    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
