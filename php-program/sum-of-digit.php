<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sum of digit</title>
</head>
<body>
    <h1>Calculate Sum of digit</h1>
    <form method="post" action="">
        <label for="">Enter a Number</label>
        <input type="number" name="number">
        <input type="submit" value="Calculate">
    </form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
$num = $_POST["number"];

$sum = 0;
while ($num > 0) {
    $digit = $num % 10; 
    $sum += $digit;  
    $num = $num / 10;
}

echo "The sum of digits is " . $sum;
}
?>
