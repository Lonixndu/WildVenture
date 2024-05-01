<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="./templates/favicon.ico">
    <title>WildVenture Login</title>

    <link rel="stylesheet" href="./templates/CSS/login-css.css">
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
            <h1>Let's get you signed in</h1>
        </div>

        <div class="body-content">
            <div class="container">
                <div class="form-container">
                    <form action="./database-read.php" method="POST">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>

                        <input type="submit" value="Login" class="login">

                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </form>
                </div>

                <div class="additional-options">
                    <div class="social-sign-in">
                        <a href="#" class="facebook-sign-in">
                        <i class="fab fa-facebook-f"></i> Sign in with Facebook
                        </a>

                        <a href="#" class="google-sign-in">
                        <i class="fab fa-google"></i> Sign in with Google
                        </a>

                        <a href="#" class="create-account">Create an account</a>
                    </div>
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