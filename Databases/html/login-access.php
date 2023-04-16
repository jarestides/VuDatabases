<?php
  include '../php/createRSO.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dashboard</title>
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
            <a class="login-form-btn" style="text-decoration:none" href="RSO.php">Go to RSO</a>
            <a class="login-form-btn" style="text-decoration:none" href="Events.php">Go to Events</a>
          <div class="login-form-create">
            <a href="loginPage.php">Logout</a>
          </div>
            <span><?php echo $invalid; ?></span>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
