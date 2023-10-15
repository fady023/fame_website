<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }} </title>
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">


    <link rel="icon" type="image/png" href="{{ asset('frontend/favicon/smooth-favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('frontend/favicon/smooth-favicon-32x32.png') }}"
        sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('frontend/favicon/smooth-favicon-144x144.png') }}"
        sizes="144x144">
    <link rel="icon" type="image/png" href="{{ asset('frontend/favicon/smooth-favicon-196x196.png') }}"
        sizes="196x196">

    <link rel="apple-touch-icon" href="{{ asset('frontend/favicon/smooth-favicon-196x196.png') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- Template stylesheet -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.min.css') }}">
</head>

<body>
    @include('frontend.layouts.header')
    @include('frontend.layouts.message')

@show
@yield('content')
@include('frontend.layouts.footer')


<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Template main JavaScript -->
<script src="{{ asset('frontend/assets/js/main.min.js') }}"></script>

<!-- Template custome JavaScript -->
<script src="{{ asset('frontend/assets/js/scripts.min.js') }}"></script>
<script>
    $(document).ready(function() {

        AOS.init();
    })
</script>
<script>
    const swiper1 = new Swiper('.swiper-1', {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 1,
        navigation: {
            nextEl: '.next-1',
            prevEl: '.prev-1',
        },
        breakpoints: {

            768: {
                slidesPerView: 2,
            }
        },
    });
    const swiper2 = new Swiper('.swiper-2', {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 1,
        navigation: {
            nextEl: '.next-2',
            prevEl: '.prev-2',
        },
        breakpoints: {

            768: {
                slidesPerView: 2,
            }
        },
    });
    const swiper3 = new Swiper('.swiper-3', {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 1,
        navigation: {
            nextEl: '.next-3',
            prevEl: '.prev-3',
        },
        breakpoints: {

            768: {
                slidesPerView: 2,
            }
        },
    });
    const swiper4 = new Swiper('.swiper-4', {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 1,
        navigation: {
            nextEl: '.next-4',
            prevEl: '.prev-4',
        },
        breakpoints: {

            768: {
                slidesPerView: 2,
            }
        },
    });
</script>
</body>

</html>
