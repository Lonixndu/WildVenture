<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="./templates/favicon.ico">
    <title>WildVenture Reservations</title>

    <link rel="stylesheet" href="./templates/CSS/website-css.css">
    <link rel="stylesheet" href="./templates/CSS/reservations-css.css">
</head>


<body>

    <!--Adding header from header.php-->
    <div class="header">
        <?php include('./templates/header.php');?>
    </div>



    <!--reservation form-->
    <div>
        <div class="heading-1">
            <h1>Reserve Your Trip</h1>
        </div>

        <div class="reserve-form">
        <form action="./database_reservation/database-create.php" method="POST">
            <fieldset class="form-div">
                <legend class="form-head">
                    <button>Hotels</button>
                    <button>Safari</button>
                    <button>Flights</button>
                    <button>Recommendations</button>
                    <button>Activities</button>
                </legend>

                <div class="location">
                    <label for="location">Location: </label>
                    <select name="location">
                        <option value="Yala">Yala National Park (10,000LKR)</option>
                        <option value="Udawalawa">Udawalawa National Park (15,000LKR)</option>
                        <option value="Sigiriya">Sigiriya (11,500LKR)</option>
                        <option value="Amazon">Amazon Rainforest</option>
                        <option value="" disabled>More Coming Soon...</option>
                    </select>
                </div>

                <div class="selection">
                    <div>
                        <label for="start-date">From: </label><br>
                        <input type="date" name="start-date" class="date" required><br>
                    </div>
                    <div>
                        <label for="end-date">To: </label><br>
                        <input type="date" name="end-date" class="date" required><br>
                    </div>
                    <div>
                        <label for="people">Rooms: </label><br>
                        <select name="people" class="people">
                            <option value="1">1</option>
                            <option value="2">2 (+5000LKR)</option>
                            <option value="3">3 (+8500LKR)</option>
                        </select>
                    </div>
                </div>

                <div class="submit">
                    <input type="submit" value="Reserve" name="reserve">
                </div>
            </fieldset>      
        </form>
        </div>
    </div>


    <!--pending reservations-->
    <div>
        <div class="heading-1">
            <h1>Your Reservations</h1>
        </div>
        <div class="pending-loc">
            <?php include('./database_reservation/database-read.php'); ?>
        </div>
    </div>


    <!--Adding footer from footer.php-->
    <div class="footer">
    <?php include('./templates/footer.php');?>
    </div>
</body>


</html>