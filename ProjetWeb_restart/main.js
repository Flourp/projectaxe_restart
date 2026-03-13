const darkmode = document.body;
const darkmode_button = document.querySelector(".lightdark")
const darkmode_images = document.querySelectorAll(".lightdark img")

darkmode_button.addEventListener("click", function () {
    darkmode.classList.toggle("dark")
    darkmode_images.forEach(function (darkmode_image) {
        darkmode_image.classList.toggle("hidden")
    })
})

