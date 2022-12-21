function checkPasswordStrength() {
    const password = document.getElementById('password').value;
    if (password.length < 8) {
      document.getElementById('result').innerHTML = 'Password is weak';
    } else {
      document.getElementById('result').innerHTML = 'Password is strong';
    }
  }

  function toggle(){
    let password = document.getElementById("password");
    let eye = document.getElementById("toggle");

    if(password.getAttribute("type") == "password"){
        password.setAttribute("type","text");
        eye.style.color = "#0be881";
    }
    else{
        password.setAttribute("type","password");
        eye.style.color = "#808080";
    }
}