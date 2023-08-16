<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        #table-container {
            text-align: center;
        }
        h2 {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            margin: auto;
        }
        td {
            border: 2px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="table-container">
        <h2>Multiplication Table</h2>
        <table>
            <?php
            for ($row = 1; $row <= 10; $row++) {
                echo "<tr>";
                for ($col = 1; $col <= 12; $col++) {
                    $product = $row * $col;
                    echo "<td>$product</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
