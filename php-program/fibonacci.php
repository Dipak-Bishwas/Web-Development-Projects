<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>fibonacci Series</h1>
    <form method="post" action="">
        <label for="">Enter a Number</label>
        <input type="number" name="number">
        <input type="submit" value="Calculate">
    </form>

      <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp = $_POST["number"];
        $first = 0;
        $second = 1;

        echo "Fibonacci Series for the first $temp terms:<br>";
        echo "$first, $second";

        for ($i = 3; $i <= $temp; $i++) {
            $next = $first + $second;
            echo ", $next";
            $first = $second;
            $second = $next;
        }
    }
    ?>
</body>
</html>