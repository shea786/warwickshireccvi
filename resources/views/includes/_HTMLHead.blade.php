    <head>
        <!-- meta -->
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- web site title -->
        <title>@yield('HTMLTitle') | WCCVI</title>

        <!-- favicon -->
        <link rel="icon" href="/images/favicon.png">

        <!-- style -->
        <link rel="stylesheet" href="/css/style.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>