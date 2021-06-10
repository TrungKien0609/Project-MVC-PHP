const item_instr = document.querySelectorAll(".instruction");
const input = document.querySelectorAll(".item input");
for (let i = 0; i < input.length; i++) {
    input[i].addEventListener("focus", function () {
        resset_instruct();
        item_instr[i].style.display = "block";
    })
    input[i].addEventListener("focusout", function () {
        resset_instruct();
        item_instr[i].style.display = "none";
    })
}
const check = document.querySelectorAll(".item .validate");
function resset_check() {
    check.forEach(item => {
        item.style.display = "none";
    })
}
function resset_instruct() {
    item_instr.forEach(element => {
        element.style.display = "none";
    })
}
const validate_email = document.querySelector(".item .validate.email");
const checkemail = document.querySelector(".item .input.email");
const icon = document.querySelectorAll(".log .item i");


function ajax(whatcheck,link,whatvalidate,whaticon,datasend){
    let xhr = new XMLHttpRequest(); //creating XML Oject
    xhr.open("POST",link, true);
    xhr.onload = function () {
        if (xhr.readyState === XMLHttpRequest.DONE)
            if (xhr.status === 200) {
                let data = JSON.parse(xhr.response);
                whatvalidate.style.display = "block";
                whatvalidate.innerHTML = data;
                if (data === "ok"){
                    whaticon.style.display = "block";
                    whatvalidate.style.display = "none";
                }
                else {
                    whaticon.style.display = "none";
                }
            }
    }
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(datasend+ "=" + whatcheck.value);
}
checkemail.addEventListener("keyup", function () {
    ajax(checkemail,"http://localhost/MVC_Kien/ajax/checkemail",validate_email, icon[1],"email")
})


const checkname = document.querySelector(".item .input.name");
const validate_name = document.querySelector(".item .validate.name");

checkname.addEventListener("keyup", function () {
    ajax(checkname, "http://localhost/MVC_Kien/ajax/checkname",validate_name,icon[0],"name");
})

const checkpass = document.querySelector(".item .input.password");
const validate_pass = document.querySelector(".item .validate.password");


checkpass.addEventListener("keyup", function () {
    ajax(checkpass,"http://localhost/MVC_Kien/ajax/checkpassword",validate_pass,icon[2],"password")
})

const retye_pass = document.querySelector(".item .input.retype_pass");
const validate_retye_pass = document.querySelector(".item .validate.retype_pass");

retye_pass.addEventListener("keyup", function () {
    validate_retye_pass.style.display = "block";
    validate_retye_pass.innerHTML = check_retype_pass(retye_pass.value);
    if (check_retype_pass(retye_pass.value) === "ok") {
        icon[3].style.display = "block";
        validate_retye_pass.innerHTML = "ok";
        validate_retye_pass.style.display = "none";
    }
    else {
        icon[3].style.display = "none";
    }
})

function check_retype_pass(temp) {
    if (checkpass.value === temp && temp != "") {
        return "ok";
    }
    else
        return "Mật khẩu phải giống như trên";
}


const signup_btn = document.querySelector(".log .button");

function checkbtn(){
    if(validate_email.innerHTML === "ok" && validate_name.innerHTML === "ok" && validate_pass.innerHTML === "ok" &&
    validate_retye_pass.innerHTML === "ok")
    return 1;
    return 0;
}
var submit_event = setInterval(() => {
    if(checkbtn() === 1 ){
        signup_btn.style.pointerEvents = "auto";
        signup_btn.style.color = "#fff";
        signup_btn.style.borderColor = "#fff";
    }
    else{
        signup_btn.style.pointerEvents = "none";
        signup_btn.style.color = "#ccc";
        signup_btn.style.borderColor = "#ccc";
    }
},500);

