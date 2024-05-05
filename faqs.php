<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="./templates/favicon.ico">
    <title>WildVenture Reservations</title>
    
    <link rel="stylesheet" href="./templates/CSS/website-css.css">
    <link rel="stylesheet" href="./templates/CSS/faqs-css.css">
</head>


<body>

    <!--Adding header from header.php-->
    <div class="header">
        <?php include('./templates/header.php');?>
    </div>



    <!--body content-->
    <div>
        <div class="heading-1">
            <h1>Need Help? FAQ!</h1>
        </div>

        <div class="container">
        <div class="faq">
            <div class="question">
                <h2>Q1: What is WildVenture?</h2>
                <p>WildVenture is your one-stop shop for planning an unforgettable wildlife safari adventure in Sri Lanka. We offer a variety of tours and experiences designed to get you up close and personal with the country's incredible wildlife.</p>
            </div>
            <div class="question">
                <h2>Q2: Where can I book safaris with WildVenture?</h2>
                <p>Currently, WildVenture offers wildlife safaris in Sri Lanka only. We are working on expanding our offerings to other exciting destinations soon! Stay tuned for updates on our website.</p>
            </div>
		
            <div class="question">
                <h2>Q3: Can I register on the WildVenture website?</h2>
                <p>Absolutely! Registering for a free account allows you to easily browse our safaris, make reservations, and manage your bookings.</p>
            </div>
			
			<div class="question">
                <h2>Q4: How can I pay for my safari reservation?</h2>
                <p>WildVenture accepts secure payments via credit or debit card for your convenience.</p>
            </div>
			
			<div class="question">
                <h2>Q5: Can I cancel my reservation?</h2>
                <p>Yes, you can cancel your reservation through your WildVenture account. Our cancellation policy is clearly outlined during the booking process.</p>
            </div>
			
            <div class="question">
                <h2>Q6: Do you offer any other services besides booking safaris?</h2>
                <p>At this time, WildVenture focuses on providing exceptional safari experiences. However, we may offer additional services in the future, so be sure to check back for updates!</p>
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