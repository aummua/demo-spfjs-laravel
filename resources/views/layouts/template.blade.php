<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>

    <ul>
      <li><a class="spf-link" href="{{ url('/') }}">home</a></li>
      <li><a class="spf-link" href="{{ url('/contact') }}">contact</a></li>
      <li><a class="spf-link" href="{{ url('/about') }}">about</a></li>
      <li><a class="spf-link" href="{{ url('/blog') }}">blog</a></li>
    </ul>

    <div id="content">

      @yield('content')

    </div>

    <script src="{{ url('/js/spf.js') }}" charset="utf-8"></script>
    <script>
      spf.init();
    </script>

  </body>
</html>
