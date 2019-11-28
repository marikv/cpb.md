<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ $settingsData['ico'] ? '/uploads/'.$settingsData['ico'] : '' }}" type="image/x-icon">
    <script>
		window.settingsData = [].concat(@json($settingsData))[0];
    </script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $settingsData['title_' . $settingsData['lang']] ?? '' }}</title>
    <meta name="description" content="" />
    <meta name="keywords" content="{{ $settingsData['keywords_' . $settingsData['lang']] ?? '' }}" />
    <meta name="application-name" content="cpb.md"/>

    <link rel="canonical" href="http://cpb.md/" />
    <meta property="og:locale" content="ro_RO" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $settingsData['title_' . $settingsData['lang']] ?? '' }}" />
    <meta property="og:description" content="{{ $settingsData['keywords_' . $settingsData['lang']] ?? '' }}" />
    <meta property="og:url" content="http://cpb.md/" />
    <meta property="og:site_name" content="{{ $settingsData['title_' . $settingsData['lang']] ?? '' }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="{{ $settingsData['keywords_' . $settingsData['lang']] ?? '' }}" />
    <meta name="twitter:title" content="{{ $settingsData['title_' . $settingsData['lang']] ?? '' }}" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap&subset=cyrillic" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
