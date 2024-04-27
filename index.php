<!DOCTYPE html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .heading-1{padding-left: 50px; font-size: 30px; font-family: "Garamond", serif;}
        .info{padding-left: 50px; padding-right: 50px; font-size: 22px; font-family: 'Trebuchet MS', sans-serif;}
        .redirect{font-size: 22px; font-family: "Garamond"; text-align: right; padding-right: 50px; padding-bottom: 50px;}
    </style>
</head>

<body style="background-color: #e6e7e3;">
    <!--Adding header from header.php-->
    <div class="header">
        <?php include("./templates/header.php")?>
    </div>

    <div class="body-content">
        <!--1st div: Greeting with the website introduction-->
        <div>
            <div class="heading-1">
                <?php
                    $name = filter_input(INPUT_GET, "firstname", FILTER_SANITIZE_STRING);
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

        <!--2nd div: Picture slideshow with pictures of destinations-->
        <div class="slideshow">
            <div><?php include('./templates/slideshow/slideshow.php')?></div>
        </div>

        <br><br><br><br>
        
        <!--3rd div: Redirect link to resservation tab-->
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
                    <a href="#">Go to Discover Page
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