<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_title }}</title>

    <style>
        .error {
            color: red;
        }

        * {
            margin: 0;
            padding: 0;
        }

        a {
            display: block;
        }

        ul {
            list-style-type: none;
            padding: 0;
            background-color: cadetblue;
        }

        ul>li {
            display: inline-block;
            margin-right: 5px;
        }

        ul>li:last-child {
            margin-right: 0;
        }

        ul>li>a {
            color: black;
            text-decoration: none;
            padding: 10px 20px;
        }

        table,
        td,
        th {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="{{ route('home.index') }}">Home</a></li>
            <li><a href="{{ route('home.login') }}">Login</a></li>
            <li><a href="{{ route('home.register') }}">Register</a></li>
        </ul>
    </nav>

    @yield('contents')

</body>

</html>
