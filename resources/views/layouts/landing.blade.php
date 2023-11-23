<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5KRX8NC');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ $settingsData['ico'] ? '/uploads/'.$settingsData['ico'] : '' }}" type="image/x-icon">
    <script>
		window.settingsData = [].concat(@json($settingsData))[0];
		window.photos = [].concat(@json($photos));
		window.faqs = [].concat(@json($faqs));
		window.pdfs = [].concat(@json($pdfs));
		window.magazine = [].concat(@json($magazine))[0];
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
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap&subset=cyrillic" rel="stylesheet">--}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KRX8NC"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div id="app">

    </div>
    <script src="{{ asset('js/TweenMax.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}?v=01" defer></script>
</body>
</html>
