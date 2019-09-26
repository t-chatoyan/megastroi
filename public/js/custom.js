window.addEventListener("load", function () {
    let menuLeftButton = document.querySelector(".label__burger");
    let body = document.querySelector("body");

    menuLeftButton.addEventListener("click", function () {
       body.classList.toggle("active");
    });

});