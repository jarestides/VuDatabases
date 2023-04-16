<?php
  include '../php/createRSO.php'
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
  function validateRSO() { 
    var status = "none"; 
    var RSOError = document.getElementById("RSOError"); 
 
    status = "<%= request.getAttribute("status") %>"; 
    if (status == "fail") { 
        console.log("Testing RSO status fail"); 
 
        RSOError.textContent = "RSO is incorrect"; 
        RSOError.style.color = "red"; 
        console.log("Testing RSO error check"); 
      return false; 
    } 
 
  } 
   
  validateRSO(); 
 
</script>

<body>
  <div class="limiter">
    <div class="container-login">
      <div class="title">
        <h1>Events</h1>
        <div class="wrap-login">
          <form class="login-form validate-form" method="post" action="">
            <span class="login-form-title"> <b>Create RSO</b></span>
            <input class="input" type="text" name="Name" id="Name" placeholder="Name" />
            <input class="input" type="text" name="Description" id="Description" placeholder="Description" />
            <button class="login-form-btn" type="submit" name="submit">
              Create
            </button>
            <span><?php echo $invalid; ?></span>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
