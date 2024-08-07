<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="./templates/slideshow-home/slideshow-home.css">
</head>

<body class="bg">
<div>
    <div class="slide-contain">
        <div class="slide fade" id="slide">
            <div class="slide-num">1 / 4</div>
            <img src="./templates/slideshow-home/slide1.jpg" style="width: 100%;">
            <div class="slide-txt">Sigiriya</div>
        </div>

        <div class="slide fade" id="slide">
            <div class="slide-num">2 / 4</div>
            <img src="./templates/slideshow-home/slide2.jpg" style="width: 100%;">
            <div class="slide-txt">Yala National Park</div>
        </div>

        <div class="slide fade" id="slide">
            <div class="slide-num">3 / 4</div>
            <img src="./templates/slideshow-home/slide3.jpg" style="width: 100%;">
            <div class="slide-txt">Willpaththu National Park</div>
        </div>

        <div class="slide fade" id="slide">
            <div class="slide-num">4 / 4</div>
            <img src="./templates/slideshow-home/slide4.jpg" style="width: 100%;">
            <div class="slide-txt">Amazon Rainforest</div>
        </div>

        <a class="prev-btn" onclick="nextSlide(-1)">&#10094;</a>
        <a class="next-btn" onclick="nextSlide(1)">&#10095;</a>
    </div>

    <div style="text-align:center;">
        <span class="slide-dot" id="slide-dot" onclick="currSlide(1)"></span>
        <span class="slide-dot" id="slide-dot" onclick="currSlide(2)"></span>
        <span class="slide-dot" id="slide-dot" onclick="currSlide(3)"></span>
        <span class="slide-dot" id="slide-dot" onclick="currSlide(4)"></span>
    </div>

    <script src="./templates/slideshow-home/slideshow-home.js"></script>
</div>
</body>
</html>