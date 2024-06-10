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
var modal = document.getElementById("myModal");

var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

function openModal(src) {
    modal.style.display = "block";
    modalImg.src = src;
    captionText.innerHTML = src.alt;
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function () {
    modal.style.display = "none";
};

// checkbox all input

function toggle(source) {
    checkboxes = document.querySelectorAll(
        'input[type="checkbox"][name="ids[]"]',
    );
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = source.checked;
    }
}

// reject modal
function showModal() {
    document.getElementById("confirmationModal").classList.remove("hidden");
}

function closeModal() {
    document.getElementById("confirmationModal").classList.add("hidden");
}

function confirmReject() {
    document.getElementById("rejectForm").submit();
}

window.onclick = function (event) {
    if (event.target == document.getElementById("confirmationModal")) {
        closeModal();
    }
};

// logout Modal
function showModalLogout() {
    document.getElementById("confirmLogoutModal").classList.remove("hidden");
}

function closeModalLogout() {
    document.getElementById("confirmLogoutModal").classList.add("hidden");
}

function confirmLogout() {
    document.getElementById("logOutForm").submit();
}

window.onclick = function (event) {
    if (event.target == document.getElementById("confirmLogOutModal")) {
        closeModal();
    }
};

// preview image input
function previewImage(event, index) {
    const image = event.target;
    const imagePreview = document.querySelector("#img-preview-" + index);

    imagePreview.style.display = "block";

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function (oFREvent) {
        imagePreview.src = oFREvent.target.result;
    };
}

// dropdown input custom
function toggleCustomInput() {
    var select = document.getElementById("asalSMP_select");
    var customInputDiv = document.getElementById("customInputDiv");
    if (select.value === "lainnya") {
        customInputDiv.classList.remove("hidden");
    } else {
        customInputDiv.classList.add("hidden");
    }
}

function handleSubmit(event) {
    var select = document.getElementById("asalSMP_select");
    var customInput = document.getElementById("customAsalSMP");
    var hiddenInput = document.getElementById("asalSMP");

    if (select.value === "lainnya") {
        hiddenInput.value = customInput.value;
    } else {
        hiddenInput.value = select.value;
    }
}

// Call the function on page load to handle the case when the form is reloaded with an error
window.onload = function () {
    toggleCustomInput();
};
