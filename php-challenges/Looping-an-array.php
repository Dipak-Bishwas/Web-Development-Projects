<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Names Challenge</title>
</head>
<body>
    <?php
    $cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul","Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

    foreach ($cities as $city) {
        echo "$city, ";
    }

    echo "<br>";

    sort($cities);

    foreach ($cities as $city) {
        echo "$city, ";
    }

    echo "<br>";

    $extra_city = array("Los Angeles", "Calcutta", "Osaka", "Beijing");

    $cities = array_merge($cities, $extra_city);

    sort($cities);

    $count_cities = count($cities);
    for ($i = 0; $i < $count_cities; $i++) {
        echo $cities[$i];
        if ($i < $count_cities - 1) {
            echo ", ";
        }
    }
    ?>
</body>
</html>
