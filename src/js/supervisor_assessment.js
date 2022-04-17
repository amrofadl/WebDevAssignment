function disableTxt() {
    document.querySelectorAll('input').forEach(element => element.disabled = true);
  }
  
  function enableTxt() {
    document.querySelectorAll('input').forEach(element => element.disabled = false);
  }

  function reset(input) {
    // document.querySelectorAll('.mark').forEach(element => element.setAttribute("value", "0"));
    for (let i=0; i < input.length; i++) {
      let inputValue = input[i].getAttribute("value");
      input[i].setAttribute("placeholder", inputValue);
    }
  }

document.addEventListener("DOMContentLoaded", ()=> {
    const editBtn = document.querySelector("#editBtn");
    const cancelBtn = document.querySelector("#cancelBtn");
    const markInput = document.querySelectorAll(".mark");
    const markInputA = document.querySelector("#criteriaA");


    for (let i=0; i < markInput.length; i++) {
      let inputValue = markInput[i].getAttribute("value");
      markInput[i].setAttribute("placeholder", inputValue);
    }

    editBtn.addEventListener("click", e=>{
        e.preventDefault();
        enableTxt();
    });

    cancelBtn.addEventListener("click", () => {
        // e.preventDefault();

        reset(markInput);
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
