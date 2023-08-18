<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Table</h1>
    <form method="post" action="">
    <label for="">Enter a Number</label>
    <input type="number" name="number">
    <input type="submit" value="Generate Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $num = $_POST["number"];
        for ($i = 1; $i <= 10; $i++) {
            $result = $num * $i;
            echo $num." x ".$i." = ".$result;
            echo "<br>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>