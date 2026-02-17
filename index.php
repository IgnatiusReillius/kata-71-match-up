<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Parejados</title>
    </head>
    <body>
        <div id="counter-zone">
            <div id="counter-time">
                0 points
            </div>
        </div>
        <div id="cards-zone">
            <div id="cards-table">
                <?php
                    for($i = 0; $i < 16; $i++) {
                            echo '<div class="card"></div>';
                    }
                ?>
            </div>
        </div>
    </body>
</html>