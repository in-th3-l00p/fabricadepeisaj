const toggler = document.querySelector("#responsive-nav-toggler");
const nav = document.querySelector("#responsive-nav");

function toggleNav() {
    if (nav.style.display === "none") {
        nav.style.display = "flex";
        nav.parentNode.classList.toggle("z-10");
        nav.parentNode.classList.toggle("z-20");
    } else {
        nav.style.display = "none";
        nav.parentNode.classList.toggle("z-10");
        nav.parentNode.classList.toggle("z-20");
    }
}

toggler.addEventListener("click", toggleNav);

window.onclick = (e) => {
    if (e.target === toggler || e.target.parentNode === toggler)
        return;
    if (e.target !== nav)
        nav.style.display = "none";
}

window.onresize = (e) => {
    if (e.target.innerWidth > 1280)
        nav.style.display = "none";
}
