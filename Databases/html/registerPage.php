<?php
    include '../php/register.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="../css/newLogin_style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<script>
    function validateRegistration() {
        var firstName = document.getElementById("fname").value;
        var fnameError = document.getElementById("fnameValidate");

        var lastName = document.getElementById("lname").value;
        var lnameError = document.getElementById("lnameValidate");

        var user_id = document.getElementById("user_id").value;
        var userError = document.getElementById("user_idValidate");

        var password = document.getElementById("password").value;
        var passError = document.getElementById("passwordValidate");

        var repeatPass = document.getElementById("repeatPass").value;
        var repPassError = document.getElementById("repPassValidate");

        var email = document.getElementById("email").value;
        var emailError = document.getElementById("emailValidate");
        var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; 
        
        fnameError.textContent = "";
        lnameError.textContent = "";
        userError.textContent = "";
        passError.textContent = "";
        repPassError.textContent = "";
        emailError.textContent = "";

        if (firstName.length > 15) {
            fnameError.textContent = "First name is too long";
            fnameError.style.color = "red";
            console.log("Testing first name length");
            return false;
        }
        if (lastName.length > 15) {
            lnameError.textContent = "Last name is too long";
            lnameError.style.color = "red";
            return false;
        }
        if (user_id.length > 20) {
            userError.textContent = "user_id must be under 20 characters";
            userError.style.color = "red";
            return false;
        }
        if (password.length > 20) {
            passError.textContent = "Password must be under 20 characters";
            passError.style.color = "red";
            return false;
        }
        if (repeatPass != password) {
            repPassError.textContent = "Passwords do not match";
            repPassError.style.color = "red";
            return false;
        }
    	
        if (!(email.match(validRegex))) { 
    		emailError.textContent = "Must be a valid email address. Try again";
    		emailError.style.color="red";
    		return false;
    		}
    	
    }
</script>

<body>
    <div class="limiter">
        <div class="container-login">
              <div class="title">
        <h1>Events</h1>
            <div class="wrap-login">
                <form class="login-form validate-form" method="post" action="">
                    <span class="login-form-title"> <b>Register</b></span>
                    <input class="input" type="text" placeholder="First Name" name="fname" id="fname" required />
                    <span id="fnameValidate"></span>
                    <input class="input" type="text" placeholder="Last Name" name="lname" id="lname" required />
                    <span id="lnameValidate"></span>
                    <input class="input" type="text" placeholder="User ID" name="user_id" id="user_id" required />
                    <span id="user_idValidate"></span>
                    <input class="input" type="password" placeholder="Password" name="password" id="password"
                        required />
                    <span id="passwordValidate"></span>
                    <input class="input" type="password" placeholder="Repeat Password" name="password-repeat"
                        id="repeatPass" required />
                    <span id="repPassValidate"></span>
                    <input class="input" type="text" placeholder="Email" name="email" id="email" required />
                    <span id="emailValidate"></span>
                    <button class="login-form-btn" type="submit" name="submit">Sign Up</button>
                    <div style = "font-size: 20px">
                        <a href="loginPage.php">Return to Login</a>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
</body>

</html>
</style>
