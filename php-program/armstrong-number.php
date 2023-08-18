<!DOCTYPE html>
<html>
<head>
    <title>Armstrong Number Checker</title>
</head>
<body>
    <h1>Armstrong Number Checker</h1>
    <form method="post" action="">
        <label for="">Enter a Number</label>
        <input type="number" name="number">
        <input type="submit" value="Check">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["number"];
        $temp = $num;
        $sum = 0;
        $digits = strlen($num);

        while ($num > 0) {
            $digit = $num % 10;
            $sum += pow($digit, $digits);
            $num = (int) ($num / 10);
        }

        if ($sum == $temp) {
            echo "$temp is an Armstrong number.";
        } else {
            echo "$temp is not an Armstrong number.";
        }
    }
    ?>
</body>
</html>
