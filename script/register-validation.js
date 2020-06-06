// Will fire on register submit attempt
function tryRegister() {
  let name = document.querySelector('[name="name"]').value;
  let surname = document.querySelector('[name="surname"]').value;
  let username = document.querySelector('[name="reg-username"]').value;
  let password = document.querySelector('[name="reg-password"]').value;
  let confirm_password = document.querySelector('[name="confirm-password"]')
    .value;
  let email = document.querySelector('[name="email"]').value;

  // Are fields empty ?
  if (
    name === "" ||
    surname === "" ||
    username === "" ||
    password === "" ||
    confirm_password === "" ||
    email === ""
  ) {
    document.getElementById("registerErrorMsg").innerHTML = "Please fill all fields!";
    return false;
  }
  // Password === confirm Password  
  if(password !== confirm_password){
    document.getElementById("registerErrorMsg").innerHTML = "Passwords do not match!";
    return false;  
  }

  // Password length > 6
  if(password.length < 6){
    document.getElementById("registerErrorMsg").innerHTML = "Password should be at least 6 characters long!";
    return false;    
  }

  return true;
  
}





