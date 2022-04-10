// function isBlank(inputField) {
//     if(inputField.value == "") {
//         return true;
//     }
//     return false;
// }


// // remove the error when input

// function makeClean(inputField) {
//     inputField.classList.remove("error");
// }


document.addEventListener("DOMContentLoaded", ()=>{
    const upcomingTable = document.querySelector("#upcomingTable");
    const pastTable = document.querySelector("#pastTable");
    const createMeetingForm = document.querySelector("#createMeeting");
    const upcomingBtn =document.querySelector("#upcomingBtn");
    const pastBtn = document.querySelector("#pastBtn");
    const createMeetingBtn = document.querySelector("#createMeetingBtn");


    upcomingBtn.addEventListener("click", e =>{
        e.preventDefault();
        pastTable.classList.add("hidden");
        createMeetingForm.classList.add("hidden");
        upcomingBtn.classList.add("button-active");
        upcomingTable.classList.remove("hidden");
        pastBtn.classList.remove("button-active");
        createMeetingBtn.classList.remove("button-add--active");
    });

    pastBtn.addEventListener("click", e =>{
        e.preventDefault();
        upcomingTable.classList.add("hidden");
        createMeetingForm.classList.add("hidden");
        pastBtn.classList.add("button-active");
        pastTable.classList.remove("hidden");
        upcomingBtn.classList.remove("button-active");
        createMeetingBtn.classList.remove("button-add--active");
    });


    createMeetingBtn.addEventListener("click", e => {
        e.preventDefault();
        upcomingTable.classList.add("hidden");
        pastTable.classList.add("hidden");
        createMeetingBtn.classList.add("button-add--active");
        createMeetingForm.classList.remove("hidden");
        upcomingBtn.classList.remove("button-active");
        pastBtn.classList.remove("button-active");
    });
    
});