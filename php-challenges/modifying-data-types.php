<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $value = "dipak";
    echo "<h1>The value is a " . gettype($value) . ".</h1>";
    ?>
    <?php
    $value = 5.43;
    echo "<h1>The value is a " . gettype($value) . ".</h1>";
    ?>
    <?php
    $value = false;
    echo "<h1>The value is a " . gettype($value) . ".</h1>";
    ?>
    <?php
    $value = 13;
    echo "<h1>The value is an " . gettype($value) . ".</h1>";
    ?>
    <?php
    $value = null;
    echo "<h1>The value is a " . gettype($value) . ".</h1>";
    ?>
</body>
</html>