const tabs = document.querySelectorAll("#button");
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
        allContent[index].classList.add("active");
    });
});

// dropzone

document
    .getElementById("dropzone-file")
    .addEventListener("change", function () {
        const file = this.files[0]; // Mengambil file yang diunggah

        if (file) {
            const reader = new FileReader();

            reader.addEventListener("load", function () {
                const image = new Image();
                image.src = reader.result;

                image.addEventListener("load", function () {
                    // Mengganti gambar default dengan gambar yang diunggah
                    const dropzoneLabel =
                        document.getElementById("dropzone-image");
                    dropzoneLabel.innerHTML = ""; // Menghapus konten SVG default
                    dropzoneLabel.appendChild(image); // Menambahkan gambar yang diunggah

                    dropzoneLabel.style.width = image.width + "px";
                    dropzoneLabel.style.height = image.height + "px";
                });
            });

            reader.readAsDataURL(file); // Membaca file sebagai URL data
        }
    });
