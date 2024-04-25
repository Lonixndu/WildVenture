<!DOCTYPE html>

<head>
    <style>
        .greeting{margin-left: 50px; font-size: 25px;}
        .greetingExt{margin-left: 50px; margin-right: 50px; font-size: 22px;}
    </style>
</head>

<body>
    <!--Adding header from header.php-->
    <div>
        <?php include("./templates/header.php")?>
    </div>


    <!--1st div: Greeting with the website introduction-->
    <div>
        <div class="greeting">
            <?php
                $name = filter_input(INPUT_GET, "firstname", FILTER_SANITIZE_STRING);
                if(!empty($name)){
                    echo "<h1>Hello {$name}!</h1>";
                }
                else{
                    echo "<h1>Hello Visitor!</h1>";
                }
            ?>
        </div>
        <div class="greetingExt">
            <p>Welcome to WildVenture, your premier destination for unforgettable wildlife safaris. 
                Explore the world's most magnificent creatures in their natural habitats with our curated experiences, 
                from the Sigiriya, Sri Lanka to the Amazon rainforest and beyond.
            </p>
        </div>
    </div>

    <br><br><br><br>

    <!--2nd div: Picture slideshow with pictures of destinations-->
    <div>
        <?php
            include('./templates/slideshow/slideshow.php');
        ?>
    </div>

    
    <!--3rd div: Redirect link to resservation tab-->
    <div></div>
</body>