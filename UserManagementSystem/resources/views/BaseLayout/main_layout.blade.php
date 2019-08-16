<html>
    <head>
        <title>User Management System</title>
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">        
        <link rel="stylesheet" href="{{ asset("css/custom.css") }}">        
        <meta name="csrf-token" content="{{ csrf_token() }}">        
    </head>
    <body>
        <div class="app">
            <div id="header_banner">
                <div id="app_name">User Management System</div>
                <div id="nav_container">
                    <ul>
                        <li><a href="{{route("createForm")}}">User Registration</a></li>
                        <li><a href="{{route("user_list")}}">User Management</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            @yield('content')
        </div>        
        <script src="{{ asset("js/app.js") }}"></script>
    </body>
</html>
