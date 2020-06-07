function verifyPasswordChange() {
  let old_password = document.querySelector('[name="old-password"]').value;
  let new_password = document.querySelector('[name="new-password"]').value;
  let new_retyped_password = document.querySelector(
    '[name="retyped-new-password"]'
  ).value;

  // None of the fields is allowed to be empty
  if (
    old_password === "" ||
    new_password === "" ||
    new_retyped_password === ""
  ) {
    document.getElementById('password-change-error-msg').innerHTML = 'None of the fields can be empty.';
    return false;
  }

  // new_password === new_retyped_password
  if(new_password !== new_retyped_password){
    document.getElementById('password-change-error-msg').innerHTML = 'Passwords do not match!';
    return false;  
  }

  // password.length must be > 6 chars
  if(new_password.length < 6){
    document.getElementById('password-change-error-msg').innerHTML = 'Passwords should be at least 6 chars long!';
    return false;
  }

  return true;
}

