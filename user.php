<?php 
session_start();
include("connect.php");
include("function.php");
$user_data = check_login($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background-image: url(images/user.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: black;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 100px;
            color: white;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
            color: white;
        }

        .user-details {
            display: flex;
            align-items: center;
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            padding: 20px 0;
            margin-bottom: 30px;
            color: white; /* Added this line to make text black */
        }

        .profile-photo {
            flex: 0 0 150px;
            margin-right: 20px;
        }

        .profile-photo img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        .details {
            flex: 1;
            color: black;
        }

        .details h2 {
            margin-top: 0;
            color: #555;
        }

        .details p {
            font-size: 1.1em;
            color: white;
        }

        .actions {
            text-align: center;
        }

        .actions .btn {
            display: inline-block;
            margin: 10px;
            padding: 15px 25px;
            font-size: 1.1em;
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .actions .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-secondary fixed-top">
    <ul>
        <li class="logo"><h4>Mashimbe</h4></li>
        <li class="btn"><span class="fas fa-bars"></span></li>
        <div class="items">
            <li><a href="home1.php">Home</a></li>
            <li><a href="help.php">Help</a></li>
            <li><a href="loginMenu.php">Login</a></li>
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
<div class="container">
    <header>
        <h1>Welcome,<?php echo $user_data['username']; ?></h1>
    </header>
    <section class="user-details">
        <div class="profile-photo">
            <img src="images/R.gif" alt="User Photo">
        </div>
        <div class="details">
            <h2>Your Details</h2>
            <p>Username: <?php echo $user_data['username']; ?></p>
            <p>Email:  <?php echo $user_data['email']; ?></p>
            <p>We are delighted to have you here. Enjoy our seamless services and make the most out of your experience!</p>
        </div>
    </section>
    <section class="actions">
        <a href="route.php" class="btn">Book Now</a>
        <a href="index.php" class="btn">Back to Home</a>
    </section>
</div>
</body>
</html>
