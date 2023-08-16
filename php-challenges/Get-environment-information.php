<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Info</title>
</head>
<body>
    <h1>PHP Information</h1>
    <?php
    phpinfo();

    $clientIP = $_SERVER['REMOTE_ADDR'];
    echo "<h2>Client's IP address: $clientIP</h2>";

    $browser = $_SERVER['HTTP_USER_AGENT'];
    echo "<h2>Browser being used: $browser</h2>";
    ?>
</body>
</html>
