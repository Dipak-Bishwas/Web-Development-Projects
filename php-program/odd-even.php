<!DOCTYPE html>
<html>
<head>
    <title>Even-Odd Checker</title>
</head>
<body>
    <h1>To Check Even or Odd</h1>
    <form method="post" action="">
        <label for="">Enter a Number</label>
        <input type="number" name="number">
        <input type="submit" value="Check">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["number"];
        
        if ($num % 2 == 0) {
            echo "Number is even.";
        } else {
            echo "Number is odd.";
        }
    }
    ?>
</body>
</html>
