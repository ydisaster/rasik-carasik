<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seenote</title>
    <link rel="stylesheet" href="styleseenote.css">
</head>
<body>
    <h2>Display Page</h2>
    <div class="message-container" id="message-container">
        <?php
        // Read messages from the file and display them
        $messages = file("messages.txt");
        foreach ($messages as $message) {
            echo "<p>$message</p>";
        }
        ?>
    </div>

    <div class="btn-group">
        <a href="home.html" class="button">Домой</a>
        <a href="type.php" class="button">Написать</a>
    </div>
</body>
</html>
