<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href={{asset("css/app.css")}}>

  </head>
  <body>
    @include('partials.header')
    <div class="container">
      @yield('content')
    </div>
    @include('partials.footer')
  </body>
</html>
