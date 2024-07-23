<?php
include("connect.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Request</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container" style="margin-left: 150px">
        <h2 class="text-center">Opnions from Users</h2>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">No:</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `opinion`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['id'] . '</th>';
                        echo '<td>' . $row['names'] . '</td>';
                        echo '<td>' . $row['mail'] . '</td>';
                        echo '<td>' . $row['topic'] . '</td>';
                        echo '<td>' . $row['subject'] . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="8" class="text-center">No tickets found</td></tr>';
                }
                ?>
            </tbody>
        </table>
    <script src="./js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>