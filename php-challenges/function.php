<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area</title>
</head>
<body>
<?php
function Rectangle($height, $width) {
    $area = $height * $width;
    echo "This rectangle is " . $height . " inches high and " . $width . " inches wide and has an area of " . $area . " square inches.";
}
Rectangle(4,5);
?>
</body>
</html>