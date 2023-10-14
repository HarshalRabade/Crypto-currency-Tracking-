 
  let subMenu = document.getElementById("subMenu");

  function toggleMenu(){
    subMenu.classList.toggle("open-menu");
  }
//  let quit=document.getElementById('exit')
//  exit.addEventListener(('click', function () {
//   // let p = confirm("do you really want to exit")
//   alert("hello")
//   // if (p) {
//   //   alert("you account is log out successfully")
//   // }
//   // else{
//   //   alert("exit")
//   // }
//  }))

// document.getElementById("exit").addEventListener(('click', function () {
//   alert("hello")
// }))
first.addEventListener ('click', function(e){
  let p = confirm("do really want to exit")
  if (p) {
    alert("your account log out successfully")
    window.location.href="login.html" 
  } else {
    alert("you didn't exit")
  }
 
})
let buttons = document.querySelectorAll(".btn");
for (let i = 0; i < buttons.length; i++) {
buttons[i].addEventListener('click', function (e) {
    alert("your trade is successfully")
  })
   
  
}


second.addEventListener ('click', function(e){
  let p = confirm("do really want to edit your profile")
  if (p) {
    // alert("your account log out successfully")
    window.location.href="edit.html" 
  } else {
    alert("you didn't exit")
  }
 
})
third.addEventListener ('click', function(e){
   
    // alert("your account log out successfully")
    window.location.href="setting.html" 
 
 
})
four.addEventListener ('click', function(e){
   
  // alert("your account log out successfully")
  window.location.href="help.html" 


})
// buttons.addEventListener('click', function (e) {
//   alert("you trade is done successfully")
// })
// var buttonsArray = Array.from(buttons);


{/* <button id="first">click me</button> */}