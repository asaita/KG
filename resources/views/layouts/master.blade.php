<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title', config('app.name'))</title>
  </head>
  <body>
    @include('layouts.partials.navbar')
    @yield('content')
      <hr>
    @include('layouts.partials.footer')




  </body>
</html>
