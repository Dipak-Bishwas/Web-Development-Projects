<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h1>Factorial Calculator</h1>
    <form method="post" action="">
        <label for="">Enter a Number</label>
        <input type="number" name="number">
        <input type="submit" value="calculate factorial">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["number"];
        
        $fact = 1;

        for ($i = 1; $i <= $num; $i++) {
            $fact *= $i;
        }

        echo "The factorial of $num is $fact";
    }
    ?>
</body>
</html>
