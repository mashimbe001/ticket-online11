<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Ticket System</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer_l.css">
    <link rel="stylesheet" href="cssfile/login.css">
    <link rel="stylesheet" a href="css\font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background-image: url(image/2.jpg);
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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .about-sec {
            display: flex;
            padding: 3rem 0;
            width: 100%;
            justify-content: center;
            background: rgba(1, 2, 2, 0.5);
            margin-top: 106px;
        }
        .about-img {
            width: 250px;
            height: 250px;
            margin: 0 3rem;
        }
        .about-img img {
            height: 100%;
            width: 100%;
        }
        .about-intro {
            color: #fff;
            width: 400px;
            height: 250px;
            border-left: 3px solid #00b894;
            padding-left: 2rem;
            margin: 0 3rem;
        }
        .about-intro p {
            margin-top: 1.5rem;
            font-size: 14px;
            opacity: .7;
        }
        @media only screen and (max-width: 900px) {
            .about-sec {
                flex-direction: column;
                align-items: center;
            }
            .about-img {
                width: 80%;
            }
            .about-intro {
                width: 100%;
                height: 100%;
                border-top: 3px solid #00b894;
                border-left: none;
                padding: 1rem;
                margin-top: 2rem;
            }
            .about-intro h3, p {
                width: 80%;
            }
            .about-intro p {
                font-size: 12px;
            }
        }
        .topic_bus {
            text-align: center;
            color: black;
            margin-top: 20px;
        }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top">
      <ul>
        <li class="logo"><h4>Mashimbe</h4></li>
        <li class="btn"><span class="fas fa-bars"></span></li>
        <div class="items">
          <li><a href="index.php">Home</a></li>
          <li><a href="help.php">Help</a></li>
       <!--   <li><a href="#">Ticket Book</a></li>-->

         
         <!-- <li><a href="#">Packages</a></li>-->
          <li><a href="loginMenu.php">Login</a></li>
          <li><a href="bout_us.php">About Us</a></li>
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

    <div class="about-sec">
        <div class="about-img">
            <img src="./images/bus1.jpg">
        </div>
        <div class="about-intro">
    <h3>About Us<span style="color: #00b894;"> !</span></h3>
    <p>Welcome Mashimbe ticket online booking system., the pioneers of Online Bus Ticket Booking in Tanzania. <br>
        Our platform, mashimbe.000webhostapp.com, collaborates with Mzumbe University registered buses to offer you a seamless ticket booking experience.    <br> <br>
         Whether you're planning a quick trip or a long journey, our easy-to-use system ensures you get the best seats at the best prices. Join thousands of satisfied passengers who choose us for our reliability, convenience, and excellent customer service. Travel smart!</p>
</div>

    </div>

    <?php include("connect.php");?>

    <h1 class="topic_bus"> ...Our Buses...</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <?php
                    $sqlget = "SELECT * FROM bus";
                    $sqldata = mysqli_query($conn, $sqlget) or die('error getting');

                    echo '<table class="table table-bordered table-hover text-center">';
                    echo '<thead class="thead-dark"><tr>
                          <th>ID</th>
                          <th>bus_name</th>
                          <th>Original Region</th>
                          </tr></thead><tbody>';

                    while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
                        echo "<tr><td>{$row['reg_no']}</td>";
                        echo "<td>{$row['company_name']}</td>";
                        echo "<td>{$row['region']}</td></tr>";
                    }
                    echo '</tbody></table>';
                ?>
            </div>
        </div>
    </div>

    <h1 class="topic_bus"> ...Our Route Services...</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <?php
                    $sqlget = "SELECT * FROM route";
                    $sqldata = mysqli_query($conn, $sqlget) or die('error getting');

                    echo '<table class="table table-bordered table-hover text-center">';
                    echo '<thead class="thead-dark"><tr>
                          <th>ID</th>
                          <th>Leaving Time</th>
                          <th>Route</th>
                          <th>Price</th>
                          </tr></thead><tbody>';

                    while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
                        echo "<tr><td>{$row['id']}</td>";
                        echo "<td>{$row['departure_time']}</td>";
                        echo "<td>{$row['route']}</td>";
                        echo "<td>{$row['price']}</td></tr>";
                    }
                    echo '</tbody></table>';
                ?>
            </div>
        </div>
    </div>

    <div class="about-sec">
        <div class="about-img">
            <img src="./images/bm1.jpg">
        </div>
        <div class="about-intro">
            <p>Plan your trip, reserve bus tickets, and arrive at your destination</p>
            <p>We offer a complete online bus booking platform where you can buy and sell bus seats. The traveler can purchase bus tickets online, and in exchange, a text message with travel details will be delivered to confirm the seat reservation.</p>
            <p>Plan your journey ahead of time, save time buying bus tickets, avoid lengthy lines, discover your boarding location quickly, and enjoy your joyous journey in comfort using Ezfare's efficient bus reservation system.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@
