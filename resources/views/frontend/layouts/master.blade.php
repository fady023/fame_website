<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }} </title>
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">


    <link rel="icon" type="image/png" href="{{asset('frontend/favicon/smooth-favicon-16x16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{asset('frontend/favicon/smooth-favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('frontend/favicon/smooth-favicon-144x144.png')}}" sizes="144x144">
    <link rel="icon" type="image/png" href="{{asset('frontend/favicon/smooth-favicon-196x196.png')}}" sizes="196x196">

    <link rel="apple-touch-icon" href="{{asset('frontend/favicon/smooth-favicon-196x196.png')}}">
      <!-- Template stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.min.css')}}">
</head>

<body>
    @include('frontend.layouts.header')
    @include('frontend.layouts.message')

    @show
    @yield('content')
    @include('frontend.layouts.footer')


    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>

    <!-- Template main JavaScript -->
    <script src="{{asset('frontend/assets/js/main.min.js')}}"></script>

    <!-- Template custome JavaScript -->
    <script src="{{asset('frontend/assets/js/scripts.min.js')}}"></script>
</body>

</html>