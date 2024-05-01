<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="./templates/favicon.ico">
    <title>WildVenture Profile</title>

    <link rel="stylesheet" href="./templates/CSS/website-css.css">
</head>


<body>

    <!--Adding header from header.php-->
    <div class="header">
        <?php include('./templates/header.php');?>
    </div>



    <!--body content-->
    <div>
        <div class="heading-1">
            <h1>Your Profile</h1>
        </div>

        <div>
        <form action=account-page.php method="get">
        <input type="submit" value="logout" name="logout">
    </form>
        </div>
    </div>



    <!--Adding footer from footer.php-->
    <div class="footer">
    <?php include('./templates/footer.php');?>
    </div>
</body>


</html>

<?php
    if(isset($_GET['logout'])){
        session_unset();
        session_destroy();
    }
?>