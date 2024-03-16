<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>typenote</title>
    <link rel="stylesheet" href="styletypenote.css">
</head>
<body>
    <h1>Напиши свое любовное письмо и отправь его мне!</h1>
    <form action="save.php" method="post">
        <textarea id="message" style="width:500px; height:600px;" name="message"></textarea><br><br>
        <button type="submit">Отправить</button>
    </form>

    <div class="btn-group">
        <a href="home.html" class="button">Домой</a>
        <a href="display.php" class="button">Прочитать</a>
    </div>
</body>
</html>
