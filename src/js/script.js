document.addEventListener("DOMContentLoaded", function () {
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        const slides = document.getElementsByClassName("slide");

        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slideIndex++;

        if (slideIndex > slides.length) {
            slideIndex = 1;
        }

        slides[slideIndex - 1].style.display = "block";

        for (let i = 0; i < slides.length; i++) {
            slides[i].addEventListener("click", function () {
                showSlides();
            });
        }
    }
});
