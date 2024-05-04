<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="./templates/favicon.ico">
    <title>WildVenture Reservations</title>
    
    <link rel="stylesheet" href="./templates/CSS/website-css.css">
    <link rel="stylesheet" href="./templates/CSS/destinations-css.css">
</head>


<body>

    <!--Adding header from header.php-->
    <div class="header">
        <?php include('./templates/header.php');?>
    </div>



    <!--body content-->
    <div>
        <div class="heading-1">
            <h1>Discover Locations</h1>
        </div>

        <div class="destination">
        <img src="./templates/destination-pictures/galle.jpg" alt="Galle, Sri Lanka">
        <h2>Galle, Sri Lanka</h2>
        <p>Galle is a historic city located on the southwestern tip of Sri Lanka. Its colonial charm, fortified walls, and vibrant atmosphere make it a must-visit destination. Explore the Dutch Fort, stroll along the cobblestone streets, and indulge in delicious local cuisine.</p>
        <button class="btn-lrn-mre">Learn More</button>
        </div>

        <div class="destination">
            <img src="./templates/destination-pictures/yala.jpg" alt="Yala National Park, Sri Lanka">
            <h2>Yala National Park</h2>
            <p>Yala National Park is renowned for its rich biodiversity and is home to a variety of wildlife species, including leopards, elephants, and sloth bears. Embark on an exciting safari adventure through its diverse landscapes and immerse yourself in nature's wonders.</p>
            <button class="btn-lrn-mre">Learn More</button>
        </div>

        <div class="destination">
            <img src="./templates/destination-pictures/amazon.jpg" alt="Kandy, Sri Lanka">
            <h2>Amazon Rainforest</h2>
            <p>Spanning millions of square kilometers, the Amazon rainforest is Earth's crown jewel of biodiversity.  Lush and wet, it shelters ten percent of the world's known species and plays a key role in regulating our planet's climate. </p>
            <button class="btn-lrn-mre">Learn More</button>
        </div>
    </div>



    <!--Adding footer from footer.php-->
    <div class="footer">
    <?php include('./templates/footer.php');?>
    </div>
</body>


</html>