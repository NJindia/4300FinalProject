// var $ = function(Id) {
//     return document.getElementById(Id);
// }

var validateForm = function (e) {

   
    var email = document.forms["contact_us_form"]["email"].value;
    var email_rx = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    // var emailValidator = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!email_rx.test(email)) {
         e.preventDefault();
         alert("Not a valid Email Address");
         return false;
     }
     else {
         return true;
     }  
     
}

