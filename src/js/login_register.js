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

function validateEmail(inputText) {
    let mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

}

document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#login");
    const registerForm = document.querySelector("#register");

    document.querySelector("#linkRegister").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.add("form--hidden");
        registerForm.classList.remove("form--hidden");
    });
    
    document.querySelector("#linkLogIn").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.remove("form--hidden");
        registerForm.classList.add("form--hidden");
    });
    
    loginForm.addEventListener("submit", e=> {
        e.preventDefault();

        //
        // Login stuff happen here

        setFormMessage(loginForm, "error", "Invalid username/password combination");
    });

    document.querySelectorAll(".form__input").forEach(inputText => {
        let mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        inputText.addEventListener("blur", e => {
            if (e.target.id === "signupUsername" && e.target.value.length < 10) {
                setInputError(inputText, "Username must be at least 10 characters in length");
            }

            // if ( e.target.id === "signupEmail" && e.target.value.match(mailFormat)) {
            //     alert("You have entered an invalid email address!");
            //     setInputError(inputText, "Enter the right Email format");
            // }

            if ( e.target.id === "signupEmail" && e.target.value.length < 10) {
                alert("You have entered an invalid email address!");
                setInputError(inputText, "Enter the right Email format");
            }

        });

        inputText.addEventListener("input", e => {
            clearInputError(inputText);
        });
    });
});