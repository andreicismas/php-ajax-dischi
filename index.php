<?php

include __DIR__ . "./dataphp/data.php";

function list_render($list)
{
    foreach ($list as $value) {
       

        echo '<div class="card" >';
        echo "<h3>" . $value["titolo"] . "</h3>"."</br>";
        echo "<img src='img/" . $value["copertina"] . " '>";
       
        echo "<h5>" . $value["artista"] . "</h5>";
        echo "<p>" . $value["anno"] . "</p>";
        echo "</div>";
        echo '<div class="card_you_tube" >';
       
        echo $value["daYoutube"];
        echo "</div>";

    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Dischi</title>
</head>

<body>
    <section class="container">
            <?php
            list_render($albums_disc)
            ?>
    </section>
</body>

</html>
© 2021 GitHub, Inc.