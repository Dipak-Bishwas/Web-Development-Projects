<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $month = 1;
    if($month >= 3 && $month <= 5){
        echo "Spring";
    }elseif($month >= 6 && $month <= 8){
        echo "summer";
    }elseif($month >= 9 && $month <= 11){
        echo "fall";
    }else{
        echo "winter";
    }
    ?>
</body>
</html>