<!DOCTPE html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .fa {
            padding: 10px;
            padding-bottom: 0;
            font-size: 20px;
            text-align: left;
            text-decoration: none;
            margin: 5px 2px;
        }

        .fa:hover, .footer-link a:hover {
            opacity: 0.7;
        }

        .footer {
            background-color: #363b34;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            padding: 0 20px 0 20px;
        }

        .footer-link {
            list-style: none;
            padding: 0;
            margin: 0;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .footer-link li {
            display: block;
            margin-right: 10px;
            padding: 5px;
            font-family: Verdana, sans-serif;
        }

        .footer a {
            text-decoration: none;
            color: #d2cfc6;
            font-weight: bold;
        }

        .admin:hover{text-decoration: underline; color: red;}
    </style>
</head>

<body>
    <footer class="footer">
        <div class="footer-container">
            <nav>
                <ul class="footer-link">
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">What's New?</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </nav>
        
            <div class="social-icon">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <p class="copy" style="margin: 15px 0 5px 0; color: #d2cfc6;">&copy;WildVenture Inc.</p> 
                <a class="admin" href="#">Admin Login</a>  
            </div>
        </div>
      </footer>
      
</body>

</html>