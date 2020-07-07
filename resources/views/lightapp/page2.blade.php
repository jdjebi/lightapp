<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      @if(isset($title))
        {{ $title }}
      @elseif(isset($title2))
        LightApp - {{ $title2 }}
      @else
        LightApp
      @endif
    </title>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap/4.5/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/cerulean/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/fontawsome/all.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/resac/resac.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/resac/admin/dashboard.css') }}">
    @yield('extras_style')
  </head>
  <body>
    @include('lightapp.nav')
    @yield('content')
    <script src="{{ asset('asset/js/jquery-3.4.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}" type="text/javascript"></script>
    @yield('scripts')
  </body>
</html>
