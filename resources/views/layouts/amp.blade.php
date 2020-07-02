<!doctype html>
<html amp lang="en">
    <head>
        <meta charset="utf-8">
        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <title>@yield('title', config('app.name'))</title>
        <link rel="canonical" href="{{ url()->current() }}">
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
        <style amp-custom>
            @yield('style')

            @media(min-width: 320px) {
                @yield('mw320')
            }

            @media(min-width: 375px) {
                @yield('mw375')
            }

            @media(min-width: 425px) {
                @yield('mw425')
            }

            @media(min-width: 768px) {
                @yield('mw768')
            }

            @media(min-width: 1024px) {
                @yield('mw1024')
            }

            @media(min-width: 1440px) {
                @yield('mw1440')
            }
        </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>
