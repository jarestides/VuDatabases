<?php
  include '../php/showEvents.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Form</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="../css/newLogin_style.css" />
</head>
<body>
  <div class="limiter">
    <div class="container-login">
      <div class="title">
        <h1>COP4710 Events</h1>
        <div class="wrap-login">
          <form class="login-form validate-form" method="post" action="">
          <?php
echo "Name: " . $_GET['name'] . " Description: " . $_GET['description'];
?>
            <div class="login-form-create">
            <a href="../html/login-access.php">Go Back</a>
            <span id="loginError"></span>
          </div>
            <span><?php echo $invalid; ?></span>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>