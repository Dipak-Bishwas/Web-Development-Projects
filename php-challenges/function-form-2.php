<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <?php
    function Rectangle($height, $width) {
        $area = $height * $width;
        echo "<h2>This rectangle is " . $height . " inches high and " . $width . " inches wide and has an area of " . $area . " square inches.</h2>";
    }

        $width = $_POST["width"];
        $height = $_POST["height"];
        Rectangle($height, $width);
    ?>
</body>
</html>

<!-- Another file name is function-form-2 -->
