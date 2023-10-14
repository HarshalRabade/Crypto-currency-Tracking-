
// document.getElementById("sign").addEventListener("click", function() {
//     alert('you are sign up successfully')
// })




const signInBtnLink = document.querySelector(".signInBtn-link");
const signUpBtnLink = document.querySelector(".signUpBtn-link");
const wrapper = document.querySelector('.wrapper');
signUpBtnLink.addEventListener('click', () =>{
    wrapper.classList.toggle('active');
});

signInBtnLink.addEventListener('click', () =>{
    wrapper.classList.toggle('active');
});
