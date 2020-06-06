// Will fire on login submit
function tryLogIn(){
    let username = document.querySelector('[name="username"]').value;
    let password = document.querySelector('[name="password"]').value;
    
    // If username or password field id empty, give err msg and deny submit
    if(username === '' || password === ''){
        document.getElementById("loginErrorMsg").innerHTML = "Username & password field can't be empty!";
        return false;
    };

    return true;
}

