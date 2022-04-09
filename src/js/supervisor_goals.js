document.addEventListener("DOMContentLoaded", () => {
    const goalsList = document.querySelector("#goalsList");
    const addGoals = document.querySelector("#addGoals");
    const goalsBtn = document.querySelector("#goalsBtn");
    const addGoalsBtn = document.querySelector("#addGoalsBtn");

    goalsBtn.addEventListener("click", e =>{
        e.preventDefault();
        addGoals.classList.add("hidden");
        goalsBtn.classList.add("button-active");
        goalsList.classList.remove("hidden");
        addGoalsBtn.classList.remove("button-add--active");
    });

    addGoalsBtn.addEventListener("click", e =>{
        e.preventDefault();
        addGoals.classList.remove("hidden");
        goalsBtn.classList.remove("button-active");
        goalsList.classList.add("hidden");
        addGoalsBtn.classList.add("button-active");
    });
});