<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="./templates/favicon.ico">
    <title>Join WildVenture</title>

    <link rel="stylesheet" href="./templates/CSS/website-css.css">
    <link rel="stylesheet" href="./templates/CSS/login-css.css">
</head>


<body>

    <!--Adding header from header.php-->
    <div class="header">
        <?php include('./templates/header.php');?>
    </div>



    <!--body content-->
    <div>
        <div class="heading-1">
            <h1>Create Your New Account</h1>
        </div>

        <div class="body-content">
            <div class="container">
                <div class="form-container">
                    <form onsubmit="return checkPass();" action="create-account.php" method="POST">
                        <label for="fname">First Name:</label>
                        <input type="text" id="fname" name="fname" required>

                        <label for="lname">Last Name:</label>
                        <input type="text" id="lname" name="lname" required><br>

                        <label for="email">Your Email:</label>
                        <input type="email" id="email" name="email" required><br>

                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                        <label for="password-2">Re-type Password:</label>
                        <input type="password" id="password-2" name="password-2" required>

                        <script>
                            function checkPass(){
                                var pass1 = document.getElementById('password').value;
                                var pass2 = document.getElementById('password-2').value;
                                if(pass1 != pass2){
                                    alert("Password Mismatch, Please Re-enter Password!");
                                }
                            }
                        </script>

                        <input type="submit" value="Create Account" class="login" name="create">
                        <p style="font-size: 12px;">*by clicking "Create Account", you will agree to our terms and conditions.</p>
                    </form>
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
