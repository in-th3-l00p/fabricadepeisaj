const t=document.querySelector("#responsive-nav-toggler"),e=document.querySelector("#responsive-nav");function o(){e.style.display==="none"?e.style.display="flex":e.style.display="none"}t.addEventListener("click",o);window.onclick=n=>{n.target===t||n.target.parentNode===t||n.target!==e&&(e.style.display="none")};window.onresize=n=>{n.target.innerWidth>1280&&(e.style.display="none")};
