<html>
      <head>
      <meta name="viewport"
    
    content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Lobster&family=Oswald:wght@200&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
        <link rel='stylesheet' href="{{ url('css/login.css') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
       @yield('script')
       <title> The Truth </title>
    </head>

    <body>
   
        @yield('content')

    </body>
</html>
