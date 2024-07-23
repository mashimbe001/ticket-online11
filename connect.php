<?php
$conn = mysqli_connect('localhost', 'root', '', 'zuu');

if(!$conn){
    die(mysqli_error($conn));
}
