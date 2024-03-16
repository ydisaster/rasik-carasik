<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["message"])) {
    $message = $_POST["message"];

    // Open the file for appending
    $file = fopen("messages.txt", "a");

    // Write the message to the file
    fwrite($file, $message . "\n");

    // Close the file
    fclose($file);

    // Redirect back to the typing page
    header("Location: type.php");
    exit;
}
?>