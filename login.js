// var attempt = 3; // Variable to count number of attempts.
// // Below function Executes on click of login button.
// function validate(){
// var username = document.getElementById("username").value;
// var password = document.getElementById("password").value;
// if ( username == "Formget" && password == "formget#123"){
// alert ("Login successfully");
// window.location = "success.html"; // Redirecting to other page.
// return false;
// }
// else{
// // attempt --;// Decrementing by one.
// // alert("You have left "+attempt+" attempt;");
// // Disabling fields after 3 attempts.
// if( attempt == 0){
// document.getElementById("username").disabled = true;
// document.getElementById("password").disabled = true;
// document.getElementById("submit").disabled = true;
// return false;
// }
// }
// }

function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;

  if (username == "") {
    alert("Ju lutem shkruani username-n tuaj!");
    return false;
  } else if (username.length < 3) {
    alert("Username duhet te jete i gjate te pakten 3 karaktere!");
    return false;
  } else if (password == "") {
    alert("Ju lutem shkruani fjalekalimin tuaj");
    return false;
  } else {
    alert("Kyqja juaj ishte e suksesshme");
    window.location = "ReadMore1.html";
  }
}