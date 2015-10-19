<!DOCTYPE html>
<html>
  <head>

    <!-- DRY Do not repeat yourself -->

    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    {!! Html::style('css/styles.css'); !!}
    {!! Html::script('js/script.js'); !!}

  </head>
  <body>
    <div class="container">
      <header>
        @include('includes.header')
      </header>

      <div class="content">
      @yield('content')
      </div>

      <footer>
        @include('includes.footer')
      </footer>
    </div>
  </body>
</html>
