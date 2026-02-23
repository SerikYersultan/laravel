<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 3</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        header { border-bottom: 1px solid #ccc; padding-bottom: 10px; margin-bottom: 20px; }
        footer { margin-top: 20px; color: gray; font-size: 12px; }
    </style>
</head>
<body>

    <header>
        <h1>Моя работа</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        Студент: Ерсултан
    </footer>

</body>
</html>