document.addEventListener("DOMContentLoaded", () => {
    const upcomingCard = document.querySelector("#upcomingCard");
    const pastCard = document.querySelector("#pastCard");
    const upcomingBtn = document.querySelector("#upcomingBtn");
    const pastBtn = document.querySelector("#pastBtn");

    upcomingBtn.addEventListener("click", e =>{
        e.preventDefault();
        pastCard.classList.add("card-hidden");
        upcomingBtn.classList.add("button-active");
        upcomingCard.classList.remove("card-hidden");
        pastBtn.classList.remove("button-active");
    });

    pastBtn.addEventListener("click", e =>{
        e.preventDefault();
        pastCard.classList.remove("card-hidden");
        upcomingBtn.classList.remove("button-active");
        upcomingCard.classList.add("card-hidden");
        pastBtn.classList.add("button-active");
    });
});