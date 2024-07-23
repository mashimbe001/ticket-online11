<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered User</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h2 class="text-center">Registered Users</h2>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">No:</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="colspan" class="colspan-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `users`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['id'] . '</th>';
                        echo '<td>' . $row['First_Name'] . '</td>';
                        echo '<td>' . $row['Last_Name'] . '</td>';
                        echo '<td>' . $row['username'] . '</td>';
                        echo '<td>' . $row['email'] . '</td>';
                        echo '<td>';
                        echo '<a href="update.php?id=' . $row['id'] . '" class="btn btn-primary btn-sm">Update</a> ';
                        echo '<a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure?\')">Delete</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="8" class="text-center">No tickets found</td></tr>';
                }
                ?>
            </tbody>
        </table>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>