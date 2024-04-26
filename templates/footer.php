<!DOCTPE html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .footer {
            background-color: #f1f1f1;
            padding: 20px 20px 20px 20px;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            max-width: 1000px;
        }

        .footer-link {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-link li {
            padding-top: 5px;
        }

        .footer-link a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .social-icon {
            float: right;
            display: block;
            text-align: right;
            padding: 20px 20px 20px 20px;
            position: fixed;
            right: 0;
        }

        .fa {
            padding: 20px;
            font-size: 30px;
            width: 30px;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }
        .fa-twitter {
            background: #55ACEE;
            color: white;
        }
        .fa-instagram {
            background: #bb0000;
            color: white;
        }

        a{
            text-decoration: none;
            color: #333;
            font-weight: bold;
            padding: 0;
        }
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
                <p style="margin: 15px 0 5px 0;">&copy;WildVenture Inc.</p> 
                <a href="#">Admin Login</a>  
            </div>
        </div>
      </footer>
      
</body>

</html>