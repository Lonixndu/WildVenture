<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./templates/favicon.ico">
    <title>WildVenture Community</title>

    <link rel="stylesheet" href="./templates/CSS/website-css.css">
    <link rel="stylesheet" href="./templates/CSS/community-css.css">
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

        <!--feedback form-->
        <div>
            <div class="heading-1">
                <h1>Leave Your Feedback</h1>
            </div>

            <div class="info">
                <form action="./database_feedback/database-create.php" method="POST">
                    <label for="rating">Rating (Out of 5)</label>
                    <select class="rating" name="rating" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>

                    <br><br>

                    <label>Additional Comments</label><br>
                    <textarea class="comment" name="comment" rows="5" cols="100"></textarea>

                    <br>
                    <div class="submit">
                        <input type="submit" value="Submit" name="submit">
                    </div>
                </form>
            </div>

            <div class="feedback-old">
                <?php include('./database_feedback/database-read.php'); ?>
            </div>
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