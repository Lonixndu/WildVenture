<?php session_start();
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="./templates/favicon.ico">
    <title>WildVenture Profile</title>

    <link rel="stylesheet" href="./templates/CSS/website-css.css">
    <link rel="stylesheet" href="./templates/CSS/account-css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>


<body>

    <!--Adding header from header.php-->
    <div class="header">
        <?php include('./templates/header.php');?>
    </div>



    <!--body content-->
    <div>
        <div class="heading-1">
            <h1>Your Profile</h1>
        </div>


        <div class="container">
        <!-- Profile Section -->
        <div class="profile-section">
            <div class="profile-details">
                <div class="profile-photo">
                    <img src="./templates/pfp.png" alt="Profile Photo">
                </div>
                <div class="edit-profile">
                    <button><i class="fas fa-edit"></i>Edit</button>
                </div>

                <div class="settings">
                    <form action=./database_reg-usr/database-delete.php method="get">
                        <input type="submit" value="Delete Account" name="delete">
                    </form>
                </div>

                <div class="logout">
                    <form action=account-page.php method="get">
                        <input type="submit" value="Log Out" name="logout">
                        <?php
                            if(isset($_GET['logout'])){
                                session_unset();
                                session_destroy();
                               echo '<script type="text/javascript">
                               window.location.href = "./login-page.php";
                             </script>';
                            }
                        ?>
                    </form>
                </div>
                
            </div>
        </div>

        <!-- Info Section -->
        <div class="info-section">
            <div class="user-info">
                <div class="info-item">
                    First Name: <?php echo "$fname"; ?>
                </div>
                <div class="info-item">
                    Last Name: <?php echo "$lname";?>
                </div>
                <div class="info-item">
                    Email: <?php echo "$email";?>
                </div>
                <div class="info-item">
                    Password: *********
                </div>
                </div>
                    <a href="./database_reg-usr/database-update.php" style="text-decoration: none;">
                    <button class="reset-pass"><i class="fas fa-key"></i>Reset Password</button>
                    </a>

                    <button class="save-button">Save</button>
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