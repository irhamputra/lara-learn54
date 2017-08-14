<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Learning Lara 5.4</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>Laravel Learning 5.4</h2>

<nav>
    <a href="/todo">Home</a>
    <a href="/todo/{$id}">Single Page</a>
</nav>

@yield('content')

<footer>
    <p>© Laravel Learning</p>
</footer>

</body>
</html>