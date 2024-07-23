<?php
session_start();
include("connect.php");
include("function.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ensure the booking ID is passed securely from the previous page
    $bookingId = $_SESSION['id']; // Assuming you stored the booking ID in session
    
    // Fetch booking details from the database
    $bookingQuery = "SELECT * FROM booking WHERE id = '$bookingId'";
    $bookingResult = mysqli_query($conn, $bookingQuery);

    if ($bookingResult) {
        $bookingDetails = mysqli_fetch_assoc($bookingResult);
    } else {
        echo "Error: " . mysqli_error($conn);
        exit(); // Exit if there's an error fetching data
    }

    mysqli_close($conn);
} else {
    header("Location: index.php"); // Redirect to homepage if accessed directly without POST data
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Successful - Online Ticket</title>
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
        p {
            font-size: 1.2em;
            color: #333;
            text-align: center;
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
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Booking Successful</h1>
        </header>
        <p>Thank you for your booking! Your ticket has been successfully booked.</p>
        <p>We have sent the booking details to your email. <br><i><b><?php echo htmlspecialchars($bookingDetails['email']); ?></b></i></p>
        <h3>See Your Ticket Details</h3>
        <table>
            <tr>
                <th>Name</th>
                <td><?php echo htmlspecialchars($bookingDetails['passenger_name']); ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo htmlspecialchars($bookingDetails['email']); ?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?php echo htmlspecialchars($bookingDetails['telephone']); ?></td>
            </tr>
            <tr>
                <th>Route</th>
                <td><?php echo htmlspecialchars($bookingDetails['route']); ?></td>
            </tr>
            <tr>
                <th>Bus Company</th>
                <td><?php echo htmlspecialchars($bookingDetails['company_name']); ?></td>
            </tr>
            <tr>
                <th>Seat Number</th>
                <td><?php echo htmlspecialchars($bookingDetails['seat_number']); ?></td>
            </tr>
            <tr>
                <th>Price</th>
                <td><?php echo htmlspecialchars($bookingDetails['price']); ?></td>
            </tr>
            <tr>
                <th>Status</th>
                <td>Booked</td>
            </tr>
        </table>
        <div style="text-align: center; margin-top: 20px;">
            <a href="payment.php" class="btn btn-link">Back</a>
            <a href="index.php" class="btn btn-link">Go to Home</a>
        </div>
    </div>
</body>
</html>
