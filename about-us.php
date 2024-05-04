<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="./templates/favicon.ico">
    <title>About WildVenture</title>
    
    <link rel="stylesheet" href="./templates/CSS/website-css.css">
    <link rel="stylesheet" href="./templates/CSS/about-css.css">
</head>


<body>

    <!--Adding header from header.php-->
    <div class="header">
        <?php include('./templates/header.php');?>
    </div>



    <!--body content-->
    <div>
        <div class="heading-1">
            <h1>Who Are We?</h1>
        </div>

        <div class="container">
            <div class="intro">
                <div class="intro-image">
                    <img src="./templates/about-us.png" alt="Wildventure">
                </div>
                <div class="info">
                    <h2>Introduction</h2>
                    <p>
                        Wild Adventure is an organization dedicated to providing thrilling and unforgettable outdoor experiences. We specialize in adventure tours, expeditions, and activities that allow you to explore the wilderness and connect with nature.
                    </p>
                </div>
            </div>
        </div>

        <br>


        <div class="services-container">
            <h2>Our Services</h2>
            <div class="services">
                <div class="service">
                    <h3>Adventure Tours</h3>
                    <p>Embark on exhilarating adventures guided by our experienced professionals.</p>
                </div>
                <div class="service">
                    <h3>Expeditions</h3>
                    <p>Join us on epic expeditions to remote and breathtaking locations around the globe.</p>
                </div>
                <div class="service">
                    <h3>Outdoor Activities</h3>
                    <p>Experience the thrill of outdoor activities like hiking, camping, and kayaking in stunning natural environments.</p>
                </div>
            </div>
        </div>
    </div>



    <!--Adding footer from footer.php-->
    <div class="footer">
    <?php include('./templates/footer.php');?>
    </div>
</body>


</html>