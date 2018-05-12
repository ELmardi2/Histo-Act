<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title', 'Hist-Act')</title>
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <div class="container">
       @include('defaults._nav')
   @yield('content')

   <footer id="footer" class=" bg-dark text-white p-4 mt-5 text-center">
        <p>All rights reserved to Elmardi yahia &copy {{date('Y')}}</p>
      </footer>
   </div>

   <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
   <script>
       CKEDITOR.replace( 'details' );
   </script>
</body>
</html>