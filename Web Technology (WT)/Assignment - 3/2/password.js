let parameters = {
    count : false
}
let strengthBar = document.getElementById("strength-bar");
let msg = document.getElementById("msg");

function strengthChecker(){
    let password = document.getElementById("password").value;
    parameters.count = (password.length > 8)?true:false;
    let barLength = Object.values(parameters).filter(value=>value);

    console.log(Object.values(parameters), barLength);

    strengthBar.innerHTML = "";
    for( let i in barLength){
        let span = document.createElement("span");
        span.classList.add("strength");
        strengthBar.appendChild(span);
    }

    let spanRef = document.getElementsByClassName("strength");
    for( let i = 0; i < spanRef.length; i++){
        switch(spanRef.length){
            case 0:
                spanRef[i].style.background = "#ff3e36";
                msg.textContent = "Your password is Weak";
                break;
            case 1:
                spanRef[i].style.background = "#ff691f";
                msg.textContent = "Your password is Strong";
                break;
        }
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