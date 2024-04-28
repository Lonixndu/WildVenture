<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="./templates/slideshow-community/slideshow-community.css">
</head>

<body class="bg">
<div>
    <div class="slide-contain">
        <div class="slide fade" id="slide">
            <div class="slide-num">1 / 5</div>
            <img src="./templates/slideshow-community/slide1.png" style="width: 100%;">
        </div>

        <div class="slide fade" id="slide">
            <div class="slide-num">2 / 5</div>
            <img src="./templates/slideshow-community/slide2.png" style="width: 100%;">
        </div>

        <div class="slide fade" id="slide">
            <div class="slide-num">3 / 5</div>
            <img src="./templates/slideshow-community/slide3.png" style="width: 100%;">
        </div>

        <div class="slide fade" id="slide">
            <div class="slide-num">4 / 5</div>
            <img src="./templates/slideshow-community/slide4.png" style="width: 100%;">
        </div>

        <div class="slide fade" id="slide">
            <div class="slide-num">5 / 5</div>
            <img src="./templates/slideshow-community/slide5.png" style="width: 100%;">
        </div>

        <a class="prev-btn" onclick="nextSlide(-1)">&#10094;</a>
        <a class="next-btn" onclick="nextSlide(1)">&#10095;</a>
    </div>

    <div style="text-align:center;">
        <span class="slide-dot" id="slide-dot" onclick="currSlide(1)"></span>
        <span class="slide-dot" id="slide-dot" onclick="currSlide(2)"></span>
        <span class="slide-dot" id="slide-dot" onclick="currSlide(3)"></span>
        <span class="slide-dot" id="slide-dot" onclick="currSlide(4)"></span>
        <span class="slide-dot" id="slide-dot" onclick="currSlide(5)"></span>
    </div>

    <script src="./templates/slideshow-community/slideshow-community.js"></script>
</div>
</body>
</html>