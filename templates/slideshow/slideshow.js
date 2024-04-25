let sIndex = 1;
showSlide(sIndex);

//next or previous slide change
function nextSlide(n)
{
    showSlide(sIndex += n);
}

//image controls by clicking dot
function currSlide(n)
{
    showSlide(sIndex = n);
}

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
}