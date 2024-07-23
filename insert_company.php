<?php 
include("connect.php");

if(isset($_POST['submit'])){
  $regno = $_POST['regno'];
  $companyname = $_POST['company_name'];
  $region = $_POST['region'];

  $sql = "INSERT INTO `bus`(reg_no,company_name,region) VALUES('$regno','$companyname','$region')";
  $result = mysqli_query($conn,$sql);

  if(!$result){
    echo "company inserted successfully";
    header("location:insert_company.php");
  }
  else{
    die(mysqli_error($conn));
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Company</title>

  <!-- css link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .container{
        margin-left: 150px;
      }
    </style>
</head>
<body>
    <!-- form -->
    <div class="form">
  <div class="container mt-3">
        <h1 class="text-center">Insert Company</h1>

        <!-- form for inserting company-->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
            <!-- company registration number -->
                <label for="product_title" class="form-label" >Company Reg No:</label>
                <input type="text"name="regno" id="product_title" class="form-control" 
                placeholder="Enter Company registration number" autocomplete="off" required>
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
            <!-- company name -->
                <label for="description" class="form-label" >Company Name</label>
                <input type="text"name="company_name" id="product_desc" class="form-control" 
                placeholder="Enter Company Name" autocomplete="off" required>
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="price" class="form-label" >Region</label>
                <input type="text"name="region" id="region" class="form-control" 
                placeholder="Enter region" autocomplete="off" required>
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="submit" class="btn btn-info" value="Submit Information ">
            </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>