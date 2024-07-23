<?php
session_start();
include("connect.php");

// Fetch all routes from the database
$routeQuery = "SELECT * FROM route";
$routeResult = mysqli_query($conn, $routeQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Routes - Online Ticket</title>
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
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1em;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s ease;
            cursor: pointer;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>All Routes</h1>
        </header>
        <?php if (mysqli_num_rows($routeResult) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Departure Time</th>
                        <th>Route</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($route = mysqli_fetch_assoc($routeResult)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($route['id']); ?></td>
                            <td><?php echo htmlspecialchars($route['departure_time']); ?></td>
                            <td><?php echo htmlspecialchars($route['route']); ?></td>
                            <td><?php echo htmlspecialchars($route['price']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No routes found.</p>
        <?php endif; ?>
        <div style="text-align: center; margin-top: 20px;">
            <a href="add_route.php" class="btn">Add New Route</a>
            <a href="index.php" class="btn">Back to Home</a>
        </div>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>
