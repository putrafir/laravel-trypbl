// Script untuk mengaktifkan tab dan mengatur lebar garis indikator
const tabs = document.querySelectorAll("button[data-target]");
const allContent = document.querySelectorAll(".content");

tabs.forEach((tab, index) => {
    tab.addEventListener("click", (e) => {
        tabs.forEach((tab) => {
            tab.classList.remove("active");
        });

        tab.classList.add("active");

        var line = document.querySelector(".line");
        line.style.width = e.target.offsetWidth + "px";
        line.style.left = e.target.offsetLeft + "px";

        allContent.forEach((content) => {
            content.classList.remove("active");
        });
        const target = tab.getAttribute("data-target");
        document.getElementById(target).classList.add("active");
    });
});

// modal image
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

function openModal(src) {
    modal.style.display = "block";
    modalImg.src = src;
    captionText.innerHTML = src.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
};
