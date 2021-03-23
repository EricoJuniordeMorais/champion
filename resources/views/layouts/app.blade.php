<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
	<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
          <div class="container">
              <div class="logo">
                <a class="logo" href="/">
                  <div class="logo-image-div">
                    <img class="logo-image img-fluid" src="https://commotion-assets.s3.amazonaws.com/customers/champion/logos/ChampionLogo.png" alt="">
                  </div>
                </a>
              </div>
          </div>
      </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
