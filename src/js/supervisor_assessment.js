function disableTxt() {
    document.querySelectorAll('input').forEach(element => element.disabled = true);
  }
  
  function enableTxt() {
    document.querySelectorAll('input').forEach(element => element.disabled = false);
  }

  // function reset() {
  //   document.querySelectorAll('.mark').forEach(element => element.setAttribute("value", "0"));
  // }

document.addEventListener("DOMContentLoaded", ()=> {
    const editBtn = document.querySelector("#editBtn");
    const cancelBtn = document.querySelector("#cancelBtn");
    const markInput = document.querySelectorAll(".mark");
    const markInputA = document.querySelector("#criteriaA");

    editBtn.addEventListener("click", e=>{
        e.preventDefault();
        enableTxt();
    });

    cancelBtn.addEventListener("click", e => {
        e.preventDefault();
        // reset();
        disableTxt();
    });

    markInput.forEach(element => {
      element.addEventListener("change", function() {
      let v = parseInt(this.value);
      if (v < 0) this.value = 0;
      if (v > 25) this.value = 25;
      });
    }); 

});
