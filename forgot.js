smash.addEventListener ('click', function (e) {
    let c = confirm("Are you sure to reset the password")
    if (c) {
        // alert("your password is reset successfuly")
        window.location.href="login.html"
        
    } else {
        alert("your password is not reset due to the some reasson")
    }
    
      
    
   

})




// smash.addEventListener ('click', function(e){
//     let p = confirm("do really want to exit")
//     if (p) {
//       alert("your account log out successfully")
//       window.location.href="login.html" 
//     } else {
//       alert("you didn't exit")
//     }
   
//   })