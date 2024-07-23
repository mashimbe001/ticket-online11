<?php
session_start();
include("connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize form input
    $departure_time = mysqli_real_escape_string($conn, $_POST['departure_time']);
    $route = mysqli_real_escape_string($conn, $_POST['route']);
    $region = mysqli_real_escape_string($conn, $_POST['region']);

    // Check if the route already exists
    $checkQuery = "SELECT id FROM route WHERE route = '$route'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        $message = "Route already exists.";
    } else {
        // Insert the data into the route table
        $insertQuery = "INSERT INTO route (departure_time, route, region) VALUES ('$departure_time', '$route', '$region')";
        
        if (mysqli_query($conn, $insertQuery)) {
            $message = "New route added successfully.";
        } else {
            $message = "Error: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Route - Online Ticket</title>
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
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            margin-top: 100px;
        }
        header {
            text-align: center;
            margin-bottom: 30px;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
            color: #007bff;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-size: 1.2em;
            color: #333;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 1.2em;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .message {
            text-align: center;
            margin-top: 20px;
            font-size: 1.2em;
            color: green;
        }
        .message.error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Add Route</h1>
        </header>
        <?php if (isset($message)): ?>
            <div class="message <?php echo isset($checkResult) && mysqli_num_rows($checkResult) > 0 ? 'error' : ''; ?>">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>
        <form action="" method="POST">
            <div class="form-group">
                <label for="departure_time">Departure Time</label>
                <input type="datetime-local" id="departure_time" name="departure_time" required>
            </div>
            <div class="form-group">
                <label for="route">Route</label>
                <input type="text" id="route" name="route" required>
            </div>
            <div class="form-group">
                <label for="region">Region</label>
                <input type="text" id="region" name="region" required>
            </div>
            <button type="submit" name="submit" class="btn">Add Route</button>
        </form>
    </div>
</body>
</html>
