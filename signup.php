<?php
session_start();
include("connect.php");
include("function.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve form data
    $user_name = $_POST['user_name'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $con_pass = $_POST['cpassword'];

    // Validate form data
    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        if ($password == $con_pass) {
            // Hash the password for security
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Generate a unique user ID
            $user_id = random_num(20);

            // Prepare SQL statement
            $stmt = $conn->prepare("INSERT INTO users (user_id, First_Name, Last_Name, username, email, password) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $user_id, $fname, $lname, $user_name, $email, $hashed_password);

            // Execute the query and check for errors
            if ($stmt->execute()) {
                echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Successfully signed up!');
                        window.location.href='login.php';
                       </script>");
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Passwords do not match!";
        }
    } else {
        echo "Please enter valid information!";
    }
    // Close the connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Mashimbe Online Get Ticket</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/signUp.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style type="text/css">
        body {
            background-image: url(images/8.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .confirm {
            background-color: black;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <li class="logo"><h4>Mashimbe Ticket</h4></li>
        <li class="btn"><span class="fas fa-bars"></span></li>
        <div class="items">
            <li><a href="home1.php">Home</a></li>
            <li><a href="help.php">Help</a></li>
            <li><a href="loginmenu.php">Login</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </div>
        <li class="search-icon">
            <input type="search" placeholder="Search">
            <label class="icon">
                <span class="fas fa-search"></span>
            </label>
        </li>
    </ul>
</nav>
<script>
    $('nav ul li.btn span').click(function(){
        $('nav ul div.items').toggleClass("show");
        $('nav ul li.btn span').toggleClass("show");
    });
</script>
<div class="confirm">
</div>
<div class="wrapper">
    <div class="registration_form">
        <div class="title">
            Sign Up for Ticket Booking
        </div>
        <form action="#" method="POST">
            <div class="form_wrap">
                <div class="input_grp">
                    <div class="input_wrap">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="input_wrap">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="input_wrap">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="input_wrap">
                    <label for="uname">Username</label>
                    <input type="text" id="uname" name="user_name" placeholder="Username" required>
                </div>
                <div class="input_wrap">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="input_wrap">
                    <label for="Confirm_password">Confirm Password</label>
                    <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
                </div>
                <div class="input_wrap">
                    <input type="submit" value="Register Now" class="submit_btn">
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
