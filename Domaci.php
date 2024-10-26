<?php



    $siteTitle = "Postani Programer";
    $navItems = ["Glavna","O nama","kontakt"];


?>

<!doctype html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $siteTitle ?></title>
    </head>
    <body>
        <h1><?php echo $siteTitle ?></h1>
        <nav>
            <ul>
                <a><?php echo $navItems[0] ?></a>
                <a><?php echo $navItems[1] ?></a>
                <a><?php echo $navItems[2] ?></a>
            </ul>
        </nav>
    </body>
</html>


