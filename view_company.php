<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Company</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container{
            margin-left: 150px;
        }
    </style>
</head>
<body>
    
<div class="container">
        <h2 class="text-center">List of  Bus Company</h2>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Reg_No:</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Region</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `bus`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['reg_no'] . '</td>';
                        echo '<td>' . $row['company_name'] . '</td>';
                        echo '<td>' . $row['region'] . '</td>';
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