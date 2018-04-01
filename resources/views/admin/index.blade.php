<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
        <title>Admin</title>
        {{--  <style href={{ mix('/css/admin.css') }}></style>  --}}
    </head>
    <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
        <div id="admin"></div>
        <script defer type="text/javascript" src="/admin/js/index.js"></script>
    </body>
</html>
