<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <navbar>
            <ul>
                <li>Menu 1</li>
                <li>Menu 2</li>
                <li>Menu 3</li>
            </ul>
        </navbar>

        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>