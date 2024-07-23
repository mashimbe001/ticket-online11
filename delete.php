<?php
include("connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM `simon` WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: admin1.php");
    } else {
        echo "Failed to delete record";
    }
}
?>
