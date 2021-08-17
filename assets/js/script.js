var name = document.getElementById("name");
var age = document.getElementById("age");
var email = document.getElementById("email");
var pass = document.getElementById("pass");

var clear = document.getElementById("reset");
    
        clear.addEventListener("click", function (e) {
            name.value = "";
            age.value = "";
            email.value = "";
            pass.value = "";
        });