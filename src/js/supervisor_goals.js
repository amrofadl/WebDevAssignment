function disableTxt() {
    document.querySelectorAll('input').forEach(element => element.disabled = true);
  }
  
function enableTxt() {
    document.querySelectorAll('input').forEach(element => element.disabled = false);
}

// function getInputVal() {
//     const val = document.querySelector('input').value;
//     alert(val);
//     setProgressBar(val);
// }

// function setProgressBar(value) {
//     document.getElementById("progress1").setAttribute("value", value.toString()); 
//   }

document.addEventListener("DOMContentLoaded", () => {
    const goalsList = document.querySelector("#goalsList");
    const addGoals = document.querySelector("#addGoals");
    const goalsBtn = document.querySelector("#goalsBtn");
    const addGoalsBtn = document.querySelector("#addGoalsBtn");
    const submitGoalBtn = document.querySelector("#submitGoal");

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
        addGoalsBtn.classList.add("button-add--active");
    });


    const progress = document.querySelectorAll(".progress");

    progress.forEach(element => {
        element.addEventListener("change", function() {
            let v = parseInt(this.value);
            if (v < 0) this.value = 0;
            if (v > 100) this.value = 100;
        });
      }); 

    const setProgressBtn = document.querySelector("#set-progress");
    const progressBar = document.querySelectorAll("progress");

    for (let i=0; i < progress.length; i++) {
        const pbValue = progressBar[i].getAttribute("value");
        progress[i].setAttribute("placeholder", pbValue);  
    }

    setProgressBtn.addEventListener("click", function() {
        for (let i=0; i < progressBar.length; i++) {

            const val = progress[i].value;
            // alert(val);
            progressBar[i].setAttribute("value", val.toString());
        }
    });

    submitGoalBtn.addEventListener("click", e =>{
        var title = document.getElementById("title").value;
        var description = document.getElementById("description").value;
        var date = document.getElementById("date").value;
        var participants = document.getElementById("participants").value;

        if (title == "" || description == "" || participants == "" || date == "") {
            window.alert("At least one field empty.");
        } 
    })
});