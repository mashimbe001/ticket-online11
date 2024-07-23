
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page - Online Ticket</title>
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
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Make Your Payment</h1>
        </header>
        <form action="booking_success.php" method="POST">
             <!-- Hidden input fields to pass user information -->
             <input type="hidden" name="passenger_name" value="<?php echo htmlspecialchars($passenger_name); ?>">
            <input type="hidden" name="telephone" value="<?php echo htmlspecialchars($telephone); ?>">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <input type="hidden" name="route" value="<?php echo htmlspecialchars($route); ?>">
            <input type="hidden" name="bus" value="<?php echo htmlspecialchars($bus); ?>">
            <input type="hidden" name="seat_number" value="<?php echo htmlspecialchars($seat_number); ?>">
            <input type="hidden" name="price" value="<?php echo htmlspecialchars($price); ?>">
            <input type="hidden" name="payment_method" value="<?php echo htmlspecialchars($payment_method); ?>">

            <div class="form-group">
                <label for="password">Enter Password to Confirm Payment</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="submit" class="btn">Confirm Payment</button>
            <a href="booking.php">Back</a>
        </form>
    </div>
</body>
</html>
