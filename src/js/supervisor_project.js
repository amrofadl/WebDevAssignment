document.addEventListener("DOMContentLoaded", () => {
    const myProject = document.querySelector("#myProject");
    const proposal = document.querySelector("#proposal");
    const addProposal = document.querySelector("#addProposal");
    const myProjectBtn =document.querySelector("#myProjectBtn");
    const proposalBtn = document.querySelector("#proposalBtn");
    const addProposalBtn = document.querySelector("#addProposalBtn");

    myProjectBtn.addEventListener("click", e =>{
        e.preventDefault();
        proposal.classList.add("hidden");
        addProposal.classList.add("hidden");
        myProjectBtn.classList.add("button-active");
        myProject.classList.remove("hidden");
        addProposalBtn.classList.remove("button-add--active");
        proposalBtn.classList.remove("button-active");
    });

    proposalBtn.addEventListener("click", e =>{
        e.preventDefault();
        proposal.classList.remove("hidden");
        myProjectBtn.classList.remove("button-active");
        addProposalBtn.classList.remove("button-add--active");
        addProposal.classList.add("hidden");
        myProject.classList.add("hidden");
        proposalBtn.classList.add("button-active");
    });

    addProposalBtn.addEventListener("click", e => {
        e.preventDefault();
        addProposal.classList.remove("hidden");
        myProjectBtn.classList.remove("button-active");
        addProposalBtn.classList.add("button-add--active");
        proposal.classList.add("hidden");
        myProject.classList.add("hidden");
        proposalBtn.classList.remove("button-active");
    });
});