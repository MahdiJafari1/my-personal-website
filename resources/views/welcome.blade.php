<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
      body {
        font-family: 'Quicksand-Medium','Nunito';
        color: #eeeeee;
      }
    </style>
    <script  src="{{ asset('/js/app.js')}}"></script>
  </head>
<body class="bg-gray-100 dark:bg-gray-800 dark:text-gray-100">
  <nav class="flex flex-wrap items-center px-10 py-2 bg-gray-900 fixed-top">
    <a href="/">mahdi jafari</a>
    <ul class="">
      <li><a href="" class="text-capitalize">about me</a></li>
      <li><a href="" class="">my skills</a></li>
      <li><a href="" class="">my portfolio</a></li>
      <li><a href="" class="">contact me</a></li>
    </ul>
  </nav>
  
</body>
</html>
