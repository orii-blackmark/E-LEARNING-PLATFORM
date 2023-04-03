function validateEmail() {
    var email = document.form1.email.value;
    if (email==""|| email==null) {
        alert("Kindly enter your email address")
        return false;
    } else {
        alert("Password Reset code has been sent to your email")
    }
}