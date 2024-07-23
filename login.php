<?php
session_start();
include("connect.php");
include("function.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        $query = "SELECT * FROM users WHERE username = '$user_name' LIMIT 1";
        $result = mysqli_query($conn, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                // Verify the password (assuming passwords are stored as hashes)
                if (password_verify($password, $user_data['password'])) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location:user.php");
                    die;
                }
            }
        }
        echo "Wrong username or password!";
    } else {
        echo "Wrong username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Mashimbe Login</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer_l.css">
    <link rel="stylesheet" href="cssfile/login.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background-image: url(images/8.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .sign_up {
            font-size: 20px;
        }
        .sign_up:hover {
            background-color: #fff;
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

<div class="login-box">
    <img src="images/avatar.png" class="avatar">
    <h1>Login For Mashimbe Get Ticket</h1>
    <form method="post">
        <p>Username</p>
        <input type="text" name="user_name" placeholder="Enter Username" required>
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password" required>
        <input type="submit" name="login" value="Login">
        <a href="signUp.php" class="sign_up">Sign Up</a>&nbsp;&nbsp;&nbsp;
        <a href="#">Forget Password</a>
    </form>
</div>
</body>
</html>
