<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Note++</title>
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:700);

        body {
            margin:0;
            font-family:'Lato', sans-serif;
            text-align:center;
            color: #999;
        }

        .welcome {
            width: 300px;
            height: 200px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -150px;
            margin-top: -100px;
        }

        a, a:visited {
            text-decoration:none;
        }

        h1 {
            font-size: 32px;
            margin: 16px 0 0 0;
        }
        body { background-color: #EEE; }
        .loginpanel {
            background-color: #FFF;
            margin: auto;
            padding: 20px;
            width: 350px;
            box-shadow: 0 0 20px #AAA;
        }
    </style>
    {{-- Imports twitter bootstrap and set some styling --}}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('users/login') }}"></a>
        </div>
        <ul class="nav navbar-nav">

            @if (Confide::user() == null)
                <li><a href="{{ URL::to('users/create') }}">Register</a>
                <li><a href="{{ URL::to('users/login') }}">Login</a>
                @endif
                @if (Confide::user() != null)
            <li><a href="{{ URL::to('users/logout') }}">Logout</a>
            @endif

        </ul>
    </nav>
        @yield('maincontent')
        @yield('footers')

</div>
</body>
</html>
