<?php
session_start();
include("connect.php");
include("function.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $passenger_name = $_POST['passenger_name'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $route = $_POST['route'];
    $bus = $_POST['bus'];
    $seat_number = $_POST['seat_number'];
    $day_to = $_POST['day_to'];
    $price = $_POST['price'];
    $payment_method = $_POST['payment_method'];

    // Insert booking into database
    $insertBooking = "INSERT INTO booking (passenger_name, telephone, email, route, company_name, seat_number,day_t0, price, payment_method)
                      VALUES ('$passenger_name', '$telephone', '$email', '$route', '$bus', '$seat_number','$day_to' '$price', '$payment_method')";

                       // Store booking details in session for use in subsequent pages
    $_SESSION['booking_details'] = [
        'passenger_name' => $passenger_name,
        'telephone' => $telephone,
        'email' => $email,
        'route' => $route,
        'bus' => $bus,
        'seat_number' => $seat_number,
        'seat_number' => $day_to,
        'price' => $price,
        'payment_method' => $payment_method ];

    if (mysqli_query($conn, $insertBooking)) {
            // Retrieve the latest booking ID
    $bookingId = mysqli_insert_id($conn);

    // Store booking ID in session
    $_SESSION['id'] = $bookingId;
        header("Location: payment.php");
        exit();
    } else {
        // Handle error
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    $user_data = check_login($conn);

    $route = $_GET['route'];
    $price = $_GET['price'];

    // Fetch booked seat numbers
    $bookedSeatsQuery = "SELECT seat_number FROM booking WHERE route='$route'";
    $bookedSeatsResult = mysqli_query($conn, $bookedSeatsQuery);
    $bookedSeats = [];
    while ($row = mysqli_fetch_assoc($bookedSeatsResult)) {
        $bookedSeats[] = $row['seat_number'];
    }

    // Fetch buses
    $busesQuery = "SELECT company_name FROM bus";
    $busesResult = mysqli_query($conn, $busesQuery);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking Page - Online Ticket</title>
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
            form .form-group {
                margin-bottom: 15px;
            }
            form .form-group label {
                font-size: 1.2em;
                color: #333;
            }
            form .form-group input, form .form-group select {
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
        </style>
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Book Your Ticket</h1>
            </header>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="passenger_name">Passenger Name</label>
                    <input type="text" id="passenger_name" name="passenger_name" value="<?php echo $user_data['username']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input type="text" id="telephone" name="telephone" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo $user_data['email']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="route">Route</label>
                    <input type="text" id="route" name="route" value="<?php echo $route; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="bus">Bus</label>
                    <select id="bus" name="bus" required>
                        <option value="">Select Bus</option>
                        <?php while ($bus = mysqli_fetch_assoc($busesResult)): ?>
                            <option value="<?php echo $bus['company_name']; ?>"><?php echo $bus['company_name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="seat_number">Seat Number</label>
                    <select id="seat_number" name="seat_number" required>
                        <option value="">Select Seat Number</option>
                        <?php for ($i = 1; $i <= 50; $i++): ?>
                            <?php if (!in_array($i, $bookedSeats)): ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="telephone">Day to Leave</label>
                    <input type="text" id="day" name="day_to" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" value="<?php echo $price; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="payment_method">Payment Method</label>
                    <select id="payment_method" name="payment_method" required>
                        <option value="Credit Card">Credit Card</option>
                        <option value="halo pesa">Halo Pesa</option>
                        <option value="tigo pesa">Tigo Pesa</option>
                        <option value="m-pesa">M-Pesa</option>
                        <option value="airtel money">Airtel Money</option>
                        <option value="t-pesa">T-Pesa</option>
                    </select>
                </div>
                <button type="submit" class="btn">Book Now</button>
            </form>
        </div>
    </body>
    </html>

    <?php
}
?>
