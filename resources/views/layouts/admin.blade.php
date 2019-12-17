<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }}</title>
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" defer></script>

    <!-- Scripts -->
    <script src="{{ asset('js/admin/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector:'.textarea-with-tinymce',
	        plugins: [
		        "advlist autolink lists link image charmap print preview anchor",
		        "searchreplace visualblocks code fullscreen",
		        "insertdatetime media table paste"
	        ],
	        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		    height : 500
        });
    </script>
</head>
<body>



    <div id="spinner" style="display: none;" class="spinner__wrapper">
        <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>


    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" target="_blank" href="{{ url('/') }}">
                    {{ config('app.name', 'CPB') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"
                                   class="nav-link dropdown-toggle"
                                   href="#"
                                   role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                >
                                    Pagina Principala <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/admin/page/landing">Top section</a>
                                    <a class="dropdown-item" href="/admin/page/photo-gallery">Foto Galerie</a>
                                    <a class="dropdown-item" href="/admin/page/video-gallery">Video Galerie</a>
                                    <a class="dropdown-item" href="/admin/page/faq">FAQ</a>
                                    <a class="dropdown-item" href="/admin/page/pdf">PDF catalog</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/admin/page/products">Catalog</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="/admin/page/news">Noutăți</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/admin/page/produseLaComanda">Produse La Comandă</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/admin/page/simplePage?id=1&edit=1">Lista Magazinelor</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/admin/page/settings">Settings</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/admin/page/file-manager">File Manager</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" style="margin-left: 25px;"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <img src="/img/turn-off.svg" style="height: 20px"/>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @if (Auth::check())
                @yield('content')
            @endif
        </main>

    </div>
</body>
</html>
