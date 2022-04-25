function setFormMessage(formElement, type, message) {
    const messageElement = formElement.querySelector(".form__message");


    messageElement.textContent = message;
    message.classList.remove("form__message--success");
    messageElement.classList.add(`form__message--${type}`);
}

function setInputError(inputText, message) {
    inputText.classList.add("form__input--error");
    inputText.parentElement.querySelector(".form__input-error-message").textContent = message;
}

function clearInputError(inputText) {
    inputText.classList.remove("form__input--error");
    inputText.parentElement.querySelector(".form__input-error-message").textContent = "";
}

document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#login");
    const registerForm = document.querySelector("#register");

    // document.querySelector("#linkRegister").addEventListener("click", e => {
    //     e.preventDefault();
    //     loginForm.classList.add("hidden");
    //     registerForm.classList.remove("hidden");
    // });
    
    // document.querySelector("#linkLogIn").addEventListener("click", e => {
    //     e.preventDefault();
    //     loginForm.classList.remove("hidden");
    //     registerForm.classList.add("hidden");
    // });

    const usertypeSelect = document.querySelector("#usertype");
    const supervisorList = document.querySelector("#select-supervisor");

    usertypeSelect.addEventListener("change", (e) => {
        // let usertypeVal = usertypeSelect.options[usertypeSelect.selectedIndex].value;
        let usertypeVal = e.target.value;

        if (usertypeVal === 'student') {
            supervisorList.classList.remove("hidden");
        } else { 
            supervisorList.classList.add("hidden");;
        }
    });
    
    // loginForm.addEventListener("submit", e=> {
    //     e.preventDefault();

    //     //
    //     // Login stuff happen here

    //     setFormMessage(loginForm, "error", "Invalid username/password combination");
    // });

    // registerForm.addEventListener("submit", e=> {

    // });

    // document.querySelectorAll(".form__input").forEach(inputText => {
    //     let mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    //     inputText.addEventListener("blur", e => {
    //         if (e.target.id === "signupUsername" && e.target.value.length < 10) {
    //             setInputError(inputText, "Username must be at least 10 characters in length");
    //         }

    //         if ( e.target.id === "signupEmail" && e.target.value.match(mailFormat)) {
    //             alert("You have entered an invalid email address!");
    //             setInputError(inputText, "Enter the right Email format");
    //         }

    //         if ( e.target.id === "signupEmail" && e.target.value.length < 10) {
    //             alert("You have entered an invalid email address!");
    //             setInputError(inputText, "Enter the right Email format");
    //         }

    //     });

    //     inputText.addEventListener("input", e => {
    //         clearInputError(inputText);
    //     });
    // });
});