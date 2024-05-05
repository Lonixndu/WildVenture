<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="./templates/CSS/payment-css.css">
</head>
<body>
    
    <div class="container">
        <form action="payment-page.php" method="get">
            <div class="raw">
                <div class="col">
                    <h3 class="title">Billing Address</h3>
                    <div class="inputBox">
                        <span>Full Name</span>
                        <input type="text" placeholder="John Doe">
                    </div>
                    <div class="inputBox">
                        <span>Email</span>
                        <input type="text" placeholder="Johndoe@example.com">
                    </div>
                    <div class="inputBox">
                        <span>Address</span>
                        <input type="text" placeholder="House no - streat - location ">
                    </div>
                    <div class="inputBox">
                        <span>Country</span>
                        <input type="text" placeholder="Sri Lanka">
                    </div>
                    <div class="inputBox">
                        <span>Zip Code</span>
                        <input type="text" placeholder="91100">
                    </div>
                </div>

                <div class="col">
                    <h3 class="title">Payment</h3>
                    <div class="inputBox">
                        <span>Card Accepted</span>
                        <img src="./templates/payment.png">
                    </div>
                    <div class="inputBox">
                        <span>Card Number</span>
                        <input type="text" maxlength="19" placeholder="0000-0000-0000-0000">
                    </div>
                    <div class="inputBox">
                        <label for="expDate">Expiration Date:</label>
                        <input type="text" id="expDate" name="expDate" maxlength="5" pattern="\d{2}/\d{2}" placeholder="MM/YY" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV</span>
                        <input type="text" placeholder="911">
                    </div>
                </div>
            </div>
            <input type="submit" value="Proceed to checkup" class="submit-btn" name="submit">  
        </form>
        
    </div>
</body>
</html>

<?php
    if(isset($_GET['submit']))
    {
        header("Location: ./reservations.php");
    }
?>