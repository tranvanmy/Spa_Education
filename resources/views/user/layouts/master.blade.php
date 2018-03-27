<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Site information -->
        <title> @yield('user-title') </title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('seo-description')">
        <meta name="keywords" content="@yield('seo-keyword')">

        @yield('user-css')
    </head>
    <body>

        <!-- Header -->
            @include('user.layouts.libraries.header')
        <!-- End header -->

        <!-- Navigation -->
            @yield('user-nav')
        <!-- Navigation End -->

        <!-- Banner -->
            @yield('user-banner')
        <!-- Banner End -->

        @yield('user-content')

        <!-- Footer -->
            @include('user.layouts.libraries.footer')
        <!-- End footer -->

        @yield('user-script')

    </body>

</html>
