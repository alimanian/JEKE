<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Zarb</title>
</head>
<body>
    <table border="1">
        <?php

            $r = $_GET['row'];
            $c = $_GET['column'];

            for($row = 1; $row <= $r; $row++) {
                echo '<tr>';
                for($column = 1; $column <= $c; $column++) {
                    echo '<td>' . $row * $column . '</td>';
                }
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>