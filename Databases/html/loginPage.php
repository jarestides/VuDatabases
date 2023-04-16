<?php
  include '../php/login.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Form</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="../css/newLogin_style.css" />
</head>

<script> 
 
  // Check to see if login info is valid 
  function validateLogin() { 
    var status = "none"; 
    var loginError = document.getElementById("loginError"); 
 
    status = "<%= request.getAttribute("status") %>"; 
    if (status == "fail") { 
       console.log("Testing LOGIN status fail"); 
 
      loginError.textContent = "Login is incorrect"; 
      loginError.style.color = "red"; 
      console.log("Testing login error check"); 
      return false; 
    } 
 
  } 
   
  validateLogin(); 
 
</script>

<body>
  <div class="limiter">
    <div class="container-login">
      <div class="title">
        <h1>Events</h1>
        <div class="wrap-login">
          <form class="login-form validate-form" method="post" action="">
            <span class="login-form-title"> <b>Login</b></span>
            <input class="input" type="text" name="user_id" id="user_id" placeholder="User ID" />
            <input class="input" type="password" name="password" id="password" placeholder="Password" />
            <button class="login-form-btn" type="submit" name="submit">
              Login
            </button>
            <span><?php echo $invalid; ?></span>
          </form>
          <div class="login-form-create">
            <a href="registerPage.php">Create an Account</a>
            <span id="loginError"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<script>

  // Check to see if login info is valid
  function validateLogin() {
    var status = "none";
    var loginError = document.getElementById("loginError");

    status = "<%= request.getAttribute("status") %>";
    if (status == "fail") {
       console.log("Testing LOGIN status fail");

      loginError.textContent = "Login is incorrect";
      loginError.style.color = "red";
      console.log("Testing login error check");
      return false;
    }

  }
  
  validateLogin();

</script>

</html>
