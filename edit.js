//  // Profile Form
// const profileForm = document.getElementById("profileForm");
// profileForm.addEventListener("submit", function(event) {
//   event.preventDefault(); // Prevent form submission

//  
// mark.addEventListener('click', function (e) {
//     let l = confirm("Is Your Information is correct")
//     if(i){
//         alert("Your Information Is Updated Successfully")
//         window.location.href="index.html"
//     }
// }) 

mark.addEventListener ('click', function (e) {
    let c = confirm("Is Your Information is correct")
    if (c) {
        alert("Your Information Is Updated Successfully")
        window.location.href="index.html"
        
    } else {
        alert("your password is not reset due to the some reasson")
    }
    
      
    

   

})

