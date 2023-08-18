<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>To check Number is Palindrome</h1>
    <form method="post" action="">
        <label for="">Enter a Number</label>
        <input type="number" name="number">
        <input type="submit" value="check">
    </form>

    <?php
if ($_POST) {
    $num = $_POST['number'];
    $originalnumber = $num;
    $reversed = 0;

    while ($num > 0) {
        $digit = $num % 10;
        $reversed = $reversed * 10 + $digit;
        $num = (int) ($num / 10);
    }

    if ($originalnumber == $reversed) {
        echo "$originalnumber is a palindrome.";
    } else {
        echo "$originalnumber is not a palindrome.";
    }
}
?>

</body>
</html>