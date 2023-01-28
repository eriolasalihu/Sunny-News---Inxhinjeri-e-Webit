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