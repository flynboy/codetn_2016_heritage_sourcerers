<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title', 'Hello CodeTN')</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/all.css') }}">
</head>

<body>
  @include('includes.nav_bar')

  @yield('content')

  @include('includes.footer')

  <script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>