document.addEventListener("DOMContentLoaded", () => {
    const proposalTable = document.querySelector("#proposalTable");
    const projStatusTable = document.querySelector("#projStatusTable");
    const proposalBtn = document.querySelector("#proposalsBtn");
    const projStatusBtn = document.querySelector("#projectsBtn");
    const addProposalBtn = document.querySelector("#addProposal");

    proposalBtn.addEventListener("click", e =>{
        e.preventDefault();
        projStatusTable.classList.add("card-hidden");
        proposalBtn.classList.add("button-active");
        proposalTable.classList.remove("card-hidden");
        projStatusBtn.classList.remove("button-active");
    });

    projStatusBtn.addEventListener("click", e =>{
        e.preventDefault();
        projStatusTable.classList.remove("card-hidden");
        proposalBtn.classList.remove("button-active");
        proposalTable.classList.add("card-hidden");
        projStatusBtn.classList.add("button-active");
    });
});