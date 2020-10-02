<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>laravel-base-crud</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
      @include('partials.header')
      <div class="container">

        @yield('content')

      </div>
      @include('partials.footer')
  </body>
</html>
