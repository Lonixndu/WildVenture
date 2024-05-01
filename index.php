<?php session_start(); ?>

<!DOCTYPE html>

<head>
    <link rel="icon" href="./templates/favicon.ico">
    <title>WildVenture Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./templates/CSS/website-css.css">
</head>



<body>
    
    <!--Adding header from header.php-->
    <div class="header">
        <?php include("./templates/header.php")?>
    </div>


    <div class="body-content">
        <!--1st div: Greeting with the website introduction (name should be imported from the database, if the user logged in, if not it will display "Visitor")-->
        <div>

            <div class="heading-1">
                <?php
                    if(isset($_SESSION['fname'])) //checking if session exists [added later to avoid an error/warning]
                    {
                        $name = $_SESSION['fname']; //if exists, session name will be assigned to the name variable
                    }
                    else{
                        $name = NULL; // if not exists, name will be null
                    }
                    
                    if(!empty($name)){
                        echo "<h1>Hello {$name}!</h1>";
                    }
                    else{
                        echo "<h1>Hello Visitor!</h1>";
                    }
                ?>
            </div>

            <div class="info">
                <p>Welcome to WildVenture, your premier destination for unforgettable wildlife safaris. 
                    Explore the world's most magnificent creatures in their natural habitats with our curated experiences, 
                    from the Sigiriya, Sri Lanka to the Amazon rainforest and beyond.
                </p>
            </div>

        </div>


        <br><br><br><br>


        <!--2nd div: Picture slideshow with pictures of destinations, transition every 4 seconds, or click next/previous buttons-->
        <div class="slideshow">
            <div><?php include('./templates/slideshow-home/slideshow-home.php')?></div>
        </div>


        <br><br><br><br>


        <!--3rd div: Redirect link to reservation tab-->
        <div>

            <div class="heading-1">
                <h1>Ready for your Adventure?</h1>
            </div>

            <div class="info">
                <!--<p>At WildVenture, we pride ourselves on delivering unparalleled 
                    excellence in trip planning and reservation services. 
                    Our dedicated team is committed to ensuring your travel 
                    experience is seamless and unforgettable. Click on the provided 
                    link to initiate your reservation with us and embark on your 
                    next adventure with confidence.
                </p>-->
                <p>At WildVenture, we pride ourselves on delivering unparalleled 
                    excellence in trip planning and reservation services. Our team 
                    is dedicated to crafting unforgettable experiences tailored to 
                    your preferences and ensuring seamless arrangements every step 
                    of the way. Contact us today to secure your reservation and 
                    embark on your next adventure with confidence and peace of mind.
                </p>
            </div>

            <div class="redirect">
                    <a href="#">Go to Reservations Page
                        <i class="fa fa-external-link" style="padding: 0; font-size: 18px;"></i>
                    </a>
            </div>

        </div>

    </div>


    <!--4th div: Adding footer from footer.php-->
    <div class="footer">
        <?php include('./templates/footer.php')?>
    </div>

</body>
</html>