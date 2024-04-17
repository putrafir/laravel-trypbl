document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach((link) => {
        link.addEventListener("click", function (event) {
            navLinks.forEach((link) => {
                link.classList.remove("active");
            });
            event.currentTarget.classList.add("active");
        });
    });
});
