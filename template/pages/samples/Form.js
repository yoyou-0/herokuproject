function validatePassWord() {
    var password = document.getElementById("password").value;
    var password_confirm = document.getElementById("password_confirm").value;
 
    if (password === password_confirm) {
        document.getElementById("msg").innerHTML = "Valid";
        document.getElementById("msg").style.color = "green";
    } else {
        document.getElementById("msg").innerHTML = "Invalid";
        document.getElementById("msg").style.color = "red";
    }
}