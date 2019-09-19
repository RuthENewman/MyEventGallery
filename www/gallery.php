<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css" type="text/css" />
        <?php
            $boxOfficeName = 'RN';
            $headTitle = $boxOfficeName . " Events Gallery";
        ?>
        <title><?php echo $headTitle?></title>
    </head>
    <body>
        <header>
            <h1><?php echo $boxOfficeName . " Events Gallery";?></h1>
            <a href="/index.php" class="btn">Back to Design Studio</a>
        </header>
        <div id="container">
            <div id="gallery">
                <?php
                    define('IMAGEPATH', 'uploads/');
                    foreach(glob(IMAGEPATH.'*') as $filename) { ?>
                        <img src=<?php echo IMAGEPATH . basename($filename) ?> />
                <?php } ?>
            </div>
        </div>
    </body>
</html>