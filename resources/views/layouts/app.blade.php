<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 3 - @yield('title')</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 40px;
            background-color: #f0f0f0;
        }
        .container {
            background: white;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 600px;
            margin: 0 auto;
        }
        header {
            border-bottom: 2px solid #333;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }
        footer {
            margin-top: 20px;
            font-size: 12px;
            color: gray;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <header>
            <h1>Моя домашняя работа</h1>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            Студент: Ерсултан, 3 курс
        </footer>
    </div>

</body>
</html>