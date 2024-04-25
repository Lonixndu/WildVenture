var sIndex = 1;
var slideInterval;
showSlide(sIndex);
startSlideShow();


//function to start automatic slideshow
function startSlideShow(){
    slideInterval = setInterval(
        function() {nextSlide(1); //move to next slide
    }, 3000 //in miliseconds
    );
}

//function to stop automatic slideshow
function stopSlideShow(){
    clearInterval(slideInterval);
}



//next or previous slide change
function nextSlide(n)
{
    stopSlideShow();//stop auto slideshow
    showSlide(sIndex += n);
}



//image controls by clicking dot
function currSlide(n)
{
    stopSlideShow(); //stop auto slideshow
    showSlide(sIndex = n);
}



//function that displays the certain image
function showSlide(n)
{
    let i;
    let slides = document.getElementsByClassName("slide");
    let dots = document.getElementsByClassName("slide-dot");

    if(n > slides.length){
        sIndex = 1;
    }
    if(n < 1){
        sIndex = slides.length;
    }

    for(i = 0; i < slides.length; i++)
    {
        slides[i].style.display = "none";
    }

    for(i = 0; i < dots.length; i++)
    {
        dots[i].className = dots[i].className.replace(" slide-active","");
    }

    slides[sIndex - 1].style.display = "block";
    dots[sIndex - 1].className += " slide-active";

    startSlideShow(); //restart auto slideshow if no usr interact
}