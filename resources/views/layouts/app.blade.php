<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
  </head>
  <body>
    <h1>@yield('h1')</h1>

    @yield('content')

    <!-- <script src="{{ asset('js/app.js') }}" charset="utf-8"></script> -->
  </body>
</html>
