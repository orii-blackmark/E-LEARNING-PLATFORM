function validateEmail() {
    var email = document.form1.email.value;
    if (email==""|| email==null) {
        alert("Kindly enter your email address")
        return false;
    } else {
        alert("Password Reset code has been sent to your email")
    }
}
function validateLogin() {
    var user = document.form2.username.value;
    var pass = document.form2.password.value;

    if (user==""||user==null) {
        alert("Enter your username!")
        return false;
    } else if(user.length<2){
        alert("Enter a valid Username")
        return false;
    }else if(pass==""||pass==null){
        alert("Enter your password")
        return false;
    }else if(pass.length < 6){
        alert("Password length should be atleast 6 characters")
        return false;
    }else{
        alert("Welcome"+" "+ user)
    }
}

function validateSignup() {
    var fname = document.form3.fname.value;
    var lname = document.form3.lname.value;
    var email = document.form3.email.value;
    var pnumber = document.form3.pnumber.value;
    var pass1 = document.form3.password.value;
    var pass2 = document.form3.cpassword.value;

    if (fname==null||fname=="") {
        alert("Enter your first name")
        return false;
    } else if(lname==null||lname=="") {
        alert("Enter your Last name")
        return false;
    }else if(email==null||email=="") {
        alert("Enter your Email")
        return false;
    }else if(pnumber==null||pnumber=="") {
        alert("Enter your Phone Number")
        return false;
    }else if(isNaN(pnumber)) {
        alert("Kindly enter numericals only")
        return false;
    }else if(pnumber.length<10) {
        alert("Phone number should not contain less than 10  characters")
        return false;
    }else if(pass1==null||pass1=="") {
        alert("Enter your password")
        return false;
    }else if(pass2==null||pass2=="") {
        alert("Confirm your password")
        return false;
    }
    else if(pass1!=pass2) {
        alert("Passwords are not matching")
        return false;
    }else if(pass1.length&&pass2.length<6) {
        alert("Password length should not be less than 6 characters")
        return false;
    }
}