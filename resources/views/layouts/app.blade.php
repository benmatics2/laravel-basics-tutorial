<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>{{ config('app.name') }}</title>
 <!-- Fonts -->
 <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
 <style>
 body {
 font-family: 'Nunito';
 }
 </style>
 </head>
 <body>

     <header>
        @include('layouts.header')
     </header>

     @yield('content')

     <footer>
       @include('layouts.footer')
     </footer>
    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
 </body>

</html>
