const toggler = document.querySelector("#responsive-nav-toggler");
const nav = document.querySelector("#responsive-nav");

toggler.addEventListener("click", () => {
    nav.classList.toggle("hidden");
});
