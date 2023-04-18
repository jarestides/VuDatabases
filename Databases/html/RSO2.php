<?php
    include ('../php/createRSO.php');
    include ('../php/hostEvent.php');
    include ('../php/leaveRSO.php');
    include ('../php/joinRSO.php');
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
        <form action="" method="post" class="form-container">
            <h1>Leave RSO</h1>
            <input class="input" type="text" name="users_user_id" id="users_user_id" placeholder="User ID" />
            <input class="input" type="text" name="rso_RSO_id" id="rso_RSO_id" placeholder="RSO ID" />
            <input class="input" type="hidden" name="lemons" id="lemons" value=lemons placeholder="lemons" />
            <button type="submit" name="submit" class="btn">Leave</button>
            <button type="button" class="btn cancel" onclick="closePopup('createUni')">Close</button>
        </form>
    </div>
    <div class="form-popup" id="joinRSO">
        <form action="" method="post" class="form-container">
            <h1>Join RSO</h1>
            <input class="input" type="text" name="users_user_id" id="users_user_id" placeholder="User ID" />
            <input class="input" type="text" name="rso_RSO_id" id="rso_RSO_id" placeholder="RSO ID" />
            <button type="submit" name="submit" class="btn">Join</button>
            <button type="button" class="btn cancel" onclick="closePopup('joinRSO')">Close</button>
        </form>
    </div>
    <div class="form-popup" id="LeaveRSO">
        <form action="" method="post" class="form-container">
            <h1>Leave RSO</h1>
            <input class="input" type="text" name="users_user_id" id="users_user_id" placeholder="User ID" />
            <input class="input" type="text" name="rso_RSO_id" id="rso_RSO_id" placeholder="RSO ID" />
            <input class="input" type="hidden" name="lemons" id="lemons" value=lemons placeholder="lemons" />
            <button type="submit" name="submit" class="btn">Leave</button>
            <button type="button" class="btn cancel" onclick="closePopup('LeaveRSO')">Close</button>
        </form>
    </div>
    <div class="form-popup" id="createRSO">
        <form action="" method="post" class="form-container">
            <h1>Create RSO</h1>
            <input class="input" type="text" name="name" id="name" placeholder="Name" />
            <input class="input" type="text" name="Description" id="Description" placeholder="Description"
                style="height: 100px;" />
            <input class="input" type="text" name="users_user_id" id="users_user_id" placeholder="User Id" />
            <select name="univprofile_univ_id" id="univprofile_univ_id">
                <option value="1">University of Central Florida</option>
                <option value="2">University of South Florida</option>
                <option value="3">University of Florida</option>
            </select>
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
    <div class="form-popup" id="showResults">
        <form action="" class="form-container">
            <h1>EVENTS</h1>
            <input class="input" type="text" name="users_user_id" id="users_user_id" placeholder="User ID" />
            <input class="input" type="text" name="rso_RSO_id" id="rso_RSO_id" placeholder="RSO ID" />
            <input class="input" type="hidden" name="lemons" id="lemons" value=lemons placeholder="lemons" />
            <button type="submit" name="submit" class="btn">Leave</button>
            <button type="button" class="btn cancel" onclick="closePopup('showResults')">Close</button>
        </form>
    </div>
    <div class="limiter">
        <div class="topnav">
            <a><button class="nav-form-create" onclick="openPopup('createUni');">Create University</button></a>
            <a><button class="nav-form-create" onclick="openPopup('joinRSO')">Join RSOs</button></a>
            <a><button class="nav-form-create" onclick="openPopup('LeaveRSO');">Leave RSO</button></a>
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
                        <a class="login-form-btn2" style="text-decoration:none" href="RSO.php">View Events</a>
                        <table   style= "margin-left: -115px" >
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Time</th>
                                <th>Date</th>
                                <th>Location</th>
                                <th>Category</th>
                                <th>Phone</th>
                                <th>Email</th>
                            </tr>
                            <tr>
                                <td>Pool Party</td>
                                <td>Play in the Pool</td>
                                <td>04:00</td>
                                <td>04/23</td>
                                <td>Student Union</td>
                                <td>Private</td>
                                <td>1111111111</td>
                                <td>man@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Pinata Smashing Tournament</td>
                                <td>Smashing</td>
                                <td>02:00</td>
                                <td>05/02</td>
                                <td>Private</td>
                                <td>The Field</td>
                                <td>3232312312</td>
                                <td>woman@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Council Meeting</td>
                                <td>To council</td>
                                <td>09:00</td>
                                <td>07/22</td>
                                <td>Private</td>
                                <td>HS1  O119</td>
                                <td>444445444</td>
                                <td>Khanh.Vu@ucf.edu</td>
                            </tr>
                            <tr>
                                <td>Lunch</td>
                                <td>To Eat Lunch</td>
                                <td>22:00</td>
                                <td>03/20</td>
                                <td>Private</td>
                                <td>Ohio</td>
                                <td>1234567891</td>
                                <td>yourmom@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Tasting</td>
                                <td>To read</td>
                                <td>19:00</td>
                                <td>03/19</td>
                                <td>Public</td>
                                <td>Garage H</td>
                                <td>444445554</td>
                                <td>Khanh.Vu@ucf.edu</td>
                            </tr>
                            <tr>
                                <td>Mario Party Tournament</td>
                                <td>You must win</td>
                                <td>13:00</td>
                                <td>03/19</td>
                                <td>Private</td>
                                <td>Senior Design Lab</td>
                                <td>234672341</td>
                                <td>me</td>
                            </tr>
                            <tr>
                                <td>Pilgrimage</td>
                                <td>Take Journey to MSB</td>
                                <td>13:00</td>
                                <td>03/19</td>
                                <td>Private</td>
                                <td>MSB Bathroom</td>
                                <td>234672341</td>
                                <td>gmail@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Pillow Fight</td>
                                <td>Fighting with Cement Blocks</td>
                                <td>13:00</td>
                                <td>03/19</td>
                                <td>Private</td>
                                <td>Your Room</td>
                                <td>1111111111</td>
                                <td>yahoo@gmail.com</td>
                            </tr>
                        </table>
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

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size: 13px
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>