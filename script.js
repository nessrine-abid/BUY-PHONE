const modal = document.getElementById("loginModal");

const buttons = document.querySelectorAll(".openLogin");

const close = document.querySelector(".close");

buttons.forEach(button => {

    button.addEventListener("click", () => {

        modal.style.display = "flex";

    });

});

close.addEventListener("click", () => {

    modal.style.display = "none";

});

window.addEventListener("click", (e) => {

    if (e.target === modal) {

        modal.style.display = "none";

    }

});