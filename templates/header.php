<!DOCTYPE html>
<head>
    <style>
        #logo{height: 150px; width: auto; float: left;}
        #heading{text-align: center; font-size: 50px; font-weight: bold; padding-top: 25px;}
        #subHeading{text-align: center; font-size: 20px;}
        #pfp{height: 100px; width: auto; float: right; padding-top: 25px; padding-right: 25px;}
        #logo, #heading, #subHeading{margin: 0px}
        #subHeading{margin-bottom: 45px;}

        body{margin: 0; font-family: Helvetica, sans-serif;}

        .topnav {overflow: hidden; background-color: #e9e9e9;}
        .topnav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 70px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {background-color: #ddd; color: black;}
        
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
    </style>
</head>

<body>
    <div>
        <img src="./logo.jpeg" id="logo">
        <a href="#"><img src="./pfp.png" id="pfp"></a>
        <h1 id="heading">WildVenture</h1>
        <h4 id="subHeading">Wildlife adventure organizer</h4>
        
    </div>

    <div class="topnav">
        <a href="#">Home</a>
        <a href="#">Reservations</a>
        <a href="#">Destinations</a>
        <a href="#">About Us</a>
        <a href="#">Community</a>
        <input type="text" placeholder="Search..">
    </div>