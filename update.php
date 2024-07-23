<?php
include("connect.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    $sql = "UPDATE `pssenger` SET firstname='$fname', lastname='$lname', email='$email', phonenumber='$phonenumber', address='$address', role='$role' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location:admin1.php");
    } else {
        echo "Failed to update record";
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `passenger` WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2 class="text-center">Update User</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" name="fname" class="form-control" value="<?php echo $row['firstname']; ?>">
        </div>
        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" class="form-control" value="<?php echo $row['lastname']; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
        </div>
        <div class="form-group">
            <label for="phonenumber">Phonenumber</label>
            <input type="text" name="phonenumber" class="form-control" value="<?php echo $row['phonenumber']; ?>">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" name="role" class="form-control" value="<?php echo $row['role']; ?>">
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
</div>
<script src="./js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
