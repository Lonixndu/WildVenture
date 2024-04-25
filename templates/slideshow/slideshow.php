<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="./templates/slideshow/slideshow.css">
</head>

<body>
    <div class="slide-contain">
        <div class="slide fade" id="slide">
            <div class="slide-num">1 / 3</div>
            <img src="./templates/slideshow/slide1.jpg" style="width: 100%;">
            <div class="slide-txt">Sigiriya</div>
        </div>

        <div class="slide fade" id="slide">
            <div class="slide-num">2 / 3</div>
            <img src="./templates/slideshow/slide2.jpg" style="width: 100%;">
            <div class="slide-txt">Yala National Park</div>
        </div>

        <div class="slide fade" id="slide">
            <div class="slide-num">3 / 3</div>
            <img src="./templates/slideshow/slide3.jpg" style="width: 100%;">
            <div class="slide-txt">Willpaththu National Park</div>
        </div>

        <a class="prev-btn" onclick="nextSlide(-1)">&#10094;</a>
        <a class="next-btn" onclick="nextSlide(1)">&#10095;</a>
    </div>

    <div style="text-align:center;">
        <span class="slide-dot" id="slide-dot" onclick="currSlide(1)"></span>
        <span class="slide-dot" id="slide-dot" onclick="currSlide(2)"></span>
        <span class="slide-dot" id="slide-dot" onclick="currSlide(3)"></span>
    </div>

    <script src="./templates/slideshow/slideshow.js"></script>
</body>
</html>