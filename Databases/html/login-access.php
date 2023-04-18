<?php
    include ('../php/createRSO.php');
    include ('../php/hostEvent.php');
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
    function openPopup(popupName) {
        document.getElementById(popupName).style.display = "block";
    }

    function closePopup(popupName) {
        document.getElementById(popupName).style.display = "none";
    }


    function closeOpenPopups(e) {
        var openpopups = document.querySelectorAll('.popup.show');
        openpopups.forEach(function () {
            this.classList.remove('show');
        });
        e.classList.add('show');
    }

    var popups = document.querySelectorAll('.popup');

</script>

<body>
    <div class="form-popup" id="createUni">
        <form action="/action_page.php" class="form-container">
            <h1>Create University</h1>
            <input class="input" type="text" name="name" id="name" placeholder="Name" />
            <input class="input" type="text" name="Description" id="Description" placeholder="Description"
                style="height: 100px;" />
            <select name="univprofile_univ_id" id="univprofile_univ_id">
                <option value="1">University of Central Florida</option>
                <option value="2">University of South Florida</option>
                <option value="3">University of Florida</option>
            </select>
            <button type="submit" class="btn">Create</button>
            <button type="button" class="btn cancel" onclick="closePopup('createUni')">Close</button>
        </form>
    </div>
    <div class="form-popup" id="joinRSO">
        <form action="/action_page.php" class="form-container">
            <h1>Join RSO</h1>
            <input class="input" type="text" name="name" id="name" placeholder="Name" />
            <input class="input" type="text" name="Description" id="Description" placeholder="Description"
                style="height: 100px;" />
            <select name="univprofile_univ_id" id="univprofile_univ_id">
                <option value="1">University of Central Florida</option>
                <option value="2">University of South Florida</option>
                <option value="3">University of Florida</option>
            </select>
            <button type="submit" class="btn">Create</button>
            <button type="button" class="btn cancel" onclick="closePopup('joinRSO')">Close</button>
        </form>
    </div>
    <div class="form-popup" id="createRSO">
        <form action="" method="post" class="form-container">
            <h1>Create RSO</h1>
            <input class="input" type="text" name="name" id="name" placeholder="Name" />
            <input class="input" type="text" name="Description" id="Description" placeholder="Description"
                style="height: 100px;" />
            <select name="univprofile_univ_id" id="univprofile_univ_id">
                <option value="1">University of Central Florida</option>
                <option value="2">University of South Florida</option>
                <option value="3">University of Florida</option>
            </select>
            <input class="input" type="text" name="users_user_id" id="users_user_id" placeholder="User Id" />
            <button type="submit" name="submit" class="btn">Create</button>
            <button type="button" class="btn cancel" onclick="closePopup('createRSO')">Close</button>
        </form>
    </div>
    <div class="form-popup" id="createEvent">
        <form action="" method="post" class="form-container">
            <h1>Create Event</h1>
            <input class="input" type="text" name="name" id="name" placeholder="Name" />
            <input class="input" type="text" name="description" id="description" placeholder="Description"
                style="height: 100px;" />
            <input class="input" type="text" name="category" id="category" placeholder="Category" />
            <input class="input" type="text" name="time" id="time" placeholder="Time" />
            <input class="input" type="text" name="date" id="date" placeholder="Date" />
            <input class="input" type="text" name="location" id="location" placeholder="Location" />
            <input class="input" type="text" name="phone" id="phone" placeholder="Phone Number" />
            <input class="input" type="text" name="email" id="email" placeholder="Email Address" />
            <select name="univprofile_univ_id" id="univprofile_univ_id">
                <option value="1">University of Central Florida</option>
                <option value="2">University of South Florida</option>
                <option value="3">University of Florida</option>
            </select>
            <button type="submit" name="submit" class="btn">Create</button>
            <button type="button" class="btn cancel" onclick="closePopup('createEvent')">Close</button>
        </form>
    </div>
    <div class="limiter">
        <div class="topnav">
            <a><button class="nav-form-create" onclick="openPopup('createUni');">Create University</button></a>
            <a><button class="nav-form-create" onclick="openPopup('joinRSO')">Join RSOs</button></a>
            <a><button class="nav-form-create" onclick="openPopup('createRSO');">Create RSO</button></a>
            <a><button class="nav-form-create" onclick="openPopup('createEvent');">Create Event</button></a>
            <a href="loginPage.php">Logout</a>
        </div>
        <div class="container-page">
            <div class="title">
                <h1><b>COP4710 Project</b></h1>
                <div class="wrap-page">
                    <form class="login-form validate-form" method="post" action="">
                        <select class="show-form-btn" name="univprofile_univ_id" id="univprofile_univ_id">
                            <option value="1">University of Central Florida</option>
                            <option value="2">University of South Florida</option>
                            <option value="3">University of Florida</option>
                        </select>
                        <a class="login-form-btn" style="text-decoration:none" href="RSO.php">View Events</a>
                        <a class="login-form-btn" style="text-decoration:none" href="test.php">test</a>
                        <span>
                            <?php echo $invalid; ?>
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
