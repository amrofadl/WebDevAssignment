function disableTxt() {
    document.querySelectorAll('input').forEach(element => element.disabled = true);
  }
  
  function enableTxt() {
    document.querySelectorAll('input').forEach(element => element.disabled = false);
  }

document.addEventListener("DOMContentLoaded", ()=> {
    const editBtn = document.querySelector("#editBtn");
    const cancelBtn = document.querySelector("#cancelBtn");

    editBtn.addEventListener("click", e=>{
        e.preventDefault();
        enableTxt();
    });
    cancelBtn.addEventListener("click", e => {
        e.preventDefault();
        disableTxt();
    });

});
