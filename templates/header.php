<!DOCTYPE html>
<head>
    <style>
        #logo{height: 150px; width: auto; float: left;}
        #heading{text-align: center; font-size: 50px; font-weight: bold; padding-top: 25px; font-family: Verdana, sans-serif; color: #d2cfc6;}
        #subHeading{text-align: center; font-size: 20px; font-family: "Lucida Handwriting", monospace; color: #9ca499;}
        #pfp{height: 100px; width: auto; float: right; padding-top: 25px; padding-right: 25px;}
        #logo, #heading, #subHeading, #pfp{margin: 0px}
        #subHeading{padding-bottom: 45px;}

        .topnav {overflow: hidden; background-color: #d6d2c9; font-family: Verdana, sans-serif;}
        .topnav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 70px;
            text-decoration: none;
            font-size: 17px;
            transition: 0.3s;
        }

        .topnav a:hover {background-color: #6c746a; color: #d2cfc6;}
        
        .topnav input[type=text] {
            float: right;
            padding: 6px;
            margin-top: 8px;
            margin-right: 16px;
            border: none;
            font-size: 17px;
        }

        @media screen and (max-width: 1400px) {
            .topnav a, .topnav input[type=text] {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }
  
            .topnav input[type=text] {
                border: 1px solid #ccc;  
            }
        }

        .topic{background-color: #363b34;}
        .topnav{background-color: #d6d2c9;}
    </style>
</head>

<body>
    <div class="topic">
        <img src="./templates/logo.jpeg" id="logo">
        <a href="#" id="pfp-link"><img src="./templates/pfp.png" id="pfp"></a>
        <h1 id="heading">WildVenture</h1>
        <h4 id="subHeading">Wildlife adventure organizer</h4>
        
        <?php
            /* Check if user session exists 
            if (isset($_SESSION['fname'])) {
            echo '<script>document.querySelector("img.pfp a:nth-child(2)").href="account.php";</script>';
            } else {
            echo '<script>document.querySelector("img.pfp a:nth-child(2)").href="login-page.php";</script>';
            }*/

            if (isset($_SESSION['fname'])) {
                echo '<script>document.getElementById("pfp-link").href="account-page.php";</script>';
            } else {
                echo '<script>document.getElementById("pfp-link").href="login-page.php";</script>';
            }
        ?>
    </div>

    <div class="topnav">
        <a href="./index.php">Home</a>
        <a href="./reservations.php">Reservations</a>
        <a href="./destinations.php">Destinations</a>
        <a href="./about-us.php">About Us</a>
        <a href="./community.php">Community</a>
        <input type="text" placeholder="Search..">
    </div>
</body>
</html>

