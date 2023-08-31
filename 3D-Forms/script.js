const signUpBtn = document.querySelector(".signup-btn");
const signInBtn = document.querySelector(".signin-btn");
const formswrapper = document.querySelector('.forms-wrapper')

signUpBtn.addEventListener("click", (e) => {
    e.preventDefault();
    formswrapper.classList.add("change");
});

signInBtn.addEventListener("click", (e) => {
    e.preventDefault();
    formswrapper.classList.remove("change");
});
