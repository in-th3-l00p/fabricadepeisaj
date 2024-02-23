const toggler = document.querySelector("#responsive-nav-toggler");
const nav = document.querySelector("#responsive-nav");

function toggleNav() {
    if (nav.style.display === "none")
        nav.style.display = "flex";
    else {
        nav.style.display = "none";
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
