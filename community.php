<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./templates/favicon.ico">
    <title>WildVenture Community</title>

    <link rel="stylesheet" href="./templates/website-css.css">
</head>


<body>

    <!--Adding header from header.php-->
    <div class="header">
        <?php
            include('./templates/header.php')
        ?>
    </div>

    <!--body content-->
    <div>
        <div class="heading-1">
            <h1>Adventurers' Thoughts...</h1>
        </div>

        <!--adding slideshow with user reviews from slideshow-community.php-->
        <div class="slideshow">
            <?php 
                include('./templates/slideshow-community/slideshow-community.php');
            ?>
        </div>
    </div>

    <!--Adding footer from footer.php-->
    <div class="footer">
        <?php
            include('./templates/footer.php')
        ?>
    </div>
</body>


</html>