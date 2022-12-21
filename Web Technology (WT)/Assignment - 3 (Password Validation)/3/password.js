function validatePassword() {
    const password = document.getElementById('password').value;
    const hasNumber = /\d/.test(password);
    const hasUppercase = /[A-Z]/.test(password);
    const hasLowercase = /[a-z]/.test(password);
    const isAtLeast8Chars = password.length >= 8;

    if (hasNumber && hasUppercase && hasLowercase && isAtLeast8Chars) {
      document.getElementById('result').innerHTML = 'Password is strong';
    } else {
      document.getElementById('result').innerHTML = 'Password is weak';
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