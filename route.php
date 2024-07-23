<?php 
session_start();
include("connect.php");
include("function.php");
$user_data = check_login($conn);
?>
<?php include("connect.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Online Ticket</title>
    <!-- CDN for icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cssfile/sidebar.css">
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-image: url("image/1.jpg");
            background-position: center;
            background-size: cover;
            height: 100vh;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        .header {
            text-align: center;
            color: #333;
        }
        .header h1 {
            margin: 0;
            font-size: 2.5em;
            color: #007bff;
        }
        .header p {
            font-size: 1.2em;
            color: #666;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        table th {
            background-color: #007bff;
            color: white;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        table tr:hover {
            background-color: #ddd;
        }
        .btn {
            padding: 10px 15px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<input type="checkbox" id="check">

<label for="check">
<i class="fa fa-bars" id="btn"></i>
<i class="fa fa-times" id="cancle"></i>
</label>
<div class="sidebar">
<header><img src="./images/R.gif">
<p><?php echo $user_data['username'];?></p>
</header>
<ul>
  <li><a href="route.php">Ticket Booking</a></li>
  <li><a href="profile.php">Profile</a></li>
  <li><a href="logout.php">logout</a></li>
  </ul>

</div>
    <div class="container">
        <div class="header">
            <h1>Welcome, <?php echo $user_data['username']; ?></h1>
            <p>Here are the available routes. Book your ticket now!</p>
        </div>
        <?php
        $sqlget = "SELECT * FROM route";
        $sqldata = mysqli_query($conn, $sqlget) or die('Error getting data');
        echo "<table>";
        echo "<tr>
                <th>ID</th>
                <th>Departure Time</th>
                <th>Route</th>
                <th>Price</th>
                <th>Action</th>
              </tr>";

        while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['departure_time']}</td>
                    <td>{$row['route']}</td>
                    <td>{$row['price']}</td>
                    <td><a class='btn' href='booking.php?id={$row['id']}&route={$row['route']}&price={$row['price']}'>Book Now</a></td>
                  </tr>";
        }
        echo "</table>";
        ?>
    </div>
</body>
</html>
