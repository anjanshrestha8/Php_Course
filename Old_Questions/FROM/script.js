function validation(){

    // validation of password
    let password =document.getElementById("pass");
    if(password.value.length<8){
        alert("Please check your password");
        document.getElementById("pass").value="";
        return false;
    }
    else{
        alert("Login!!!!!")
    }
    // validation of email
    let email = document.getElementById("mail");
    let regExp =/^([a-z A-Z 0-9 \._-]+)@([a-z 0-9]+.)([a-z]+.)([a-z]?)$/;
    if(regExp.test(email)){
        alert("valid email");
        return true;
    }
    else{
        alert("Input valid email");
        // document.getElementById("user").value= " ";
        return false;
    }
    

}