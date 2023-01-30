var email = document.forms['form']['email'];
var password = document.forms['form']['pass'];
var username = document.forms['form']['name'];
var confirmpass = document.forms['form']['confirm'];
var email_error =document.getElementById('email_error');
var pass_error =document.getElementById('pass_error');
var name_error =document.getElementById('name_error');
var confirmpass_error =document.getElementById('confirmpass_error');

function validate(){
    if(email.value.length < 1 )
    {
        email.style.border = "1px solid red";
        email_error.style.display = "inline";
        email.focus();
        return false;
    }else{
        email_error.style.display = "none";
    }
    if(password.value.length < 1 )
    {
        password.style.border = "1px solid red";
        pass_error.style.display = "inline";
        password.focus();
        return false;
    }else{
        email_error.style.display = "none";
    }
}

function validateSignUp(){
    if(email.value.length < 1 )
    {
        email.style.border = "1px solid red";
        email_error.style.display = "inline";
        email.focus();
        return false;
    }else{
        email_error.style.display = "none";
    }
    if(username.value.length < 1 )
    {
        username.style.border = "1px solid red";
        name_error.style.display = "inline";
        username.focus();
        return false;
    }else{
        name_error.style.display = "none";
    }
    if(password.value.length < 1 )
    {
        password.style.border = "1px solid red";
        pass_error.style.display = "inline";
        password.focus();
        return false;
    }else{
        pass_error.style.display = "none";
    }
    if(confirmpass.value.length < 1 )
    {
        confirmpass.style.border = "1px solid red";
        confirmpass_error.style.display = "inline";
        confirmpass.focus();
        return false;
    }else{
        if(confirmpass.value != password.value){
            confirmpass.style.border = "1px solid red";
            confirmpass_error.style.display = "inline";
            confirmpass.focus();
            return false;
        }else{
            confirmpass_error.style.display = "none";
        }
    }
    
}