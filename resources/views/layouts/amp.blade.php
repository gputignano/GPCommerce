<!doctype html>
<html amp lang="en">
    <head>
        <meta charset="utf-8">
        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <title>@yield('title', config('app.name'))</title>
        <link rel="canonical" href="{{ url()->current() }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
        @yield('amp-components')
        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
        <style amp-custom>
            @include('inc.normalize')

            @include('inc.styles')
            @include('inc.background-colors')
            @include('inc.btn')
            @include('inc.btn-primary')
            @include('inc.colors')
            @include('inc.layout')

            body {
                display: grid;
                grid-template-columns: repeat(12, 1fr);
                grid-column-gap: 10px;
                font-family: Roboto;
            }

            body > * {
                grid-column: span 12;
            }

            header {
                background-color: var(--c1);
                padding: 12px;
            }

            nav {
                background-color: var(--c2);
                padding: 0 12px;
            }

            nav ul {
                display: flex;
                list-style: none;
                margin: 6px 0;
                padding: 0;
            }

            nav ul li {
                margin-right: 5px;
            }

            main {
                padding: 0 12px;
            }

            aside {
                padding: 0 12px;
            }

            footer {
                color: #fff;
                background-color: var(--c1);
                padding: 12px;
            }
        </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>
