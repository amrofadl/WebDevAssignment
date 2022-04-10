function openNav() {
    document.getElementById("nav-bar").style.display = "unset";
    document.getElementById("container__close").style.display = "unset";
  }
  
  function closeNav() {
    document.getElementById("nav-bar").style.display = "none";
  }

document.addEventListener("DOMContentLoaded", () => {
    const hamburgerBtn = document.querySelector("#hamburger");
    const closeBtn = document.querySelector("#close-nav");

    hamburgerBtn.addEventListener("click", e => {
        e.preventDefault();
        openNav();
    })

    closeBtn.addEventListener("click", e => {
        e.preventDefault();
        closeNav();
    })
});