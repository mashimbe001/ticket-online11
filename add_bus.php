<?php  
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Bus</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $b_number = $_POST['busNumber'];
        $b_name = $_POST['busName'];
        $b_capacity = $_POST['busCapacity'];

        $sql = "INSERT INTO aless (bus_number,bus_name,bus_capacity) 
        values ('$b_number','$b_name','$b_capacity')";

        $result = mysqli_query($conn,$sql);

        if($result){
            echo "Bus has been entered!";
            header("location:add_bus.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }
     ?>
    <div class="container center-content">
        <div class="row">
            <div class="col-md-30">
                <form method="POST" action="">
                    <h3 class="text-center">Add Bus</h3>
                    <div class="mb-3">
                        <label for="busNumber" class="form-label">Bus Number</label>
                        <input type="number" class="form-control" name="busNumber" aria-describedby="busNumberHelp">
                    </div>
                    <div class="mb-3">
                        <label for="busName" class="form-label">Bus Name</label>
                        <input type="text" class="form-control" name="busName">
                    </div>
                    <div class="mb-3">
                        <label for="busCapacity" class="form-label">Capacity</label>
                        <input type="number" class="form-control" name="busCapacity">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
