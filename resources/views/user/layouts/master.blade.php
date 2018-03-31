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
        <!-- External CSS -->

        <link rel="stylesheet" href="{{ mix('/user/external.min.css') }}">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ mix('/user/custom.min.css') }}">
        <link rel="stylesheet" href="{{ mix('/user/responsive.min.css') }}">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CRoboto+Slab:400,700%7CPacifico" rel="stylesheet">
        <!-- Favicon -->

        <link rel="icon" href="/images/favicon.png">
        <link rel="apple-touch-icon" href="/static/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/static/images/icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/static/images/icon-114x114.png">
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->

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

        <script type="text/javascript" src="{{ mix('/user/library.min.js') }}"></script>

        @yield('user-script')

    </body>

</html>
