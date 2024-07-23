<?php
session_start();

include("connect.php");
include("function.php");
$user_data = check_login($conn);

$role = "Admin";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

    <!-- CSS link for offline use -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>

    <!-- JS link for offline use -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
        .admin_image {
            width: 50px;
            object-fit: contain;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Navbar section -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary p-0">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <p class="nav-link text-light"><h5>Welcome <?php echo "Admin";?></h5></p>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Second section -->
        <div class="bg-light text-center p-1">
            <h3>Manage Daily Routes</h3>
        </div>
    </div>

    <!-- Third section -->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-3">
                <p class="text-light">Role: <?php echo $role; ?></p>
            </div>
            <div class="button text-center p-3">
            <button><a href="admin1.php?route" class="nav-link text-light bg-info my-1 text-black">Add Route</a></button>
            <button><a href="admin1.php?view_route" class="nav-link text-light bg-info my-1 text-black">View Route</a></button>
            
                <button><a href="admin1.php?insert_company" class="nav-link text-light bg-info my-1 text-black">Register Company</a></button>
                <button><a href="admin1.php?view_company" class="nav-link text-light bg-info my-1 text-black">View Company</a></button>
                <button><a href="admin1.php?registered_user" class="nav-link text-light bg-info my-1 text-black">Registered Users</a></button>
                <button><a href="admin1.php?contact" class="nav-link text-light bg-info my-1 text-black">View Requests from Users</a></button>
                <button><a href="admin1.php?ticket" class="nav-link text-light bg-info my-1 text-black">View Tickes</a></button>
                <button><a href="admin1.php?transaction" class="nav-link text-light bg-info my-1 text-black">Transaction Made</a></button>
                <button><a href="logout.php" class="nav-link text-light bg-info my-1 text-black">Log Out</a></button>
            </div>
        </div>
        <div class="include">
            <?php
            if (isset($_GET['insert_company'])) {
                include("insert_company.php");
            }
            if (isset($_GET['view_company'])) {
                include("view_company.php");
            }
            if (isset($_GET['contact'])) {
                include("view_request.php");
            }
            if (isset($_GET['registered_user'])) {
                include("registered_user.php");
            }
            if(isset($_GET['ticket'])){
                include("view_ticket.php");
            }
            if(isset($_GET['transaction'])){
                include("transaction.php");
            }
            if(isset($_GET['route'])){
                include("add_route.php");
            }
            if(isset($_GET['view_route'])){
                include("view_route.php");
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
