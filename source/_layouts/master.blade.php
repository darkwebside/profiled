<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description"
              content="@yield('description')"/>
        <meta name="keywords" content="Light, Led, Ilumination"/>
        <meta name="author" content="Manuel Glez">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="3 month">
        <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/ico/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/ico/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/ico/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/ico/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/ico/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/ico/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/ico/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/ico/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/ico/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/ico/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/ico/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/ico/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/ico/favicon-16x16.png">
        <link rel="manifest" href="../assets/images/ico/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="Profiled.es">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129042775-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-129042775-1');
        </script>

    </head>
    <body class="scroll-assist" data-reveal-selectors="section:not(.masonry):not(:first-of-type):not(.parallax)">
        @include('_layouts.navigation')
        @yield('body')
        @include('_layouts.footer')
        <script src="{{mix('js/main.js','assets/build')}}"></script>

    </body>
</html>
