<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mashimbe Ticket Admin Login</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer_l.css">
    <!--  <link rel="stylesheet" type="text/css" href="cssfile/container.css">-->
    <link rel="stylesheet" href="cssfile/login.css">
    <link rel="stylesheet" a href="css\font-awesome.min.css">
   
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <style type="text/css">
       body{
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                background-image: url(images/3.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;

            }
            .sign_up{

                font-size: 20px;

            }
            .sign_up:hover{

                background-color: #fff;
                

            }

    </style>

  </head>
  <body>
  <nav>
      <ul>
        <li class="logo"><h4>Mashimbe Ticket</h4></li>
        <li class="btn"><span class="fas fa-bars"></span></li>
        <div class="items">
          <li><a href="home.php">Home</a></li>
          <li><a href="help.php">Help</a></li>
          <li><a href="loginMenu.php">Login</a></li>
          <li><a href="AboutUs.php">About Us</a></li>
           <li><a href="contact_us.php">Contact Us</a></li>
            <li><a href="slide.php">Services</a></li>


        </div>
        <li class="search-icon">
          <input type="search" placeholder="Search">
          <label class="icon">
            <span class="fas fa-search"></span>
          </label>
        </li>
      </ul>
    </nav>
    <script>
      $('nav ul li.btn span').click(function(){
        $('nav ul div.items').toggleClass("show");
        $('nav ul li.btn span').toggleClass("show");
      });
    </script>

<?php include("connect.php"); ?>

 <div class="login-box">
    <img src="image/avatar.png" class="avatar">

            <h1>Admin Login</h1>
            <form method="POST">
                    <p>Username</p>
                    <input type="text" name="Admin_username" placeholder="Enter Username">
                    <p>Password</p>
                    <input type="password" name="Admin_password" placeholder="Enter Password">
                    <input type="submit" name="login" value="Login">
            </form>      
 </div>
    
<?php 

    if(isset($_POST['login'])){

        $query="SELECT * FROM `admin` WHERE username='$_POST[Admin_username]'  AND  password='$_POST[Admin_password]'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1){

        // session_start();//
         $_SESSION['username']=$_POST['Admin_username'];
         header("location:admin1.php");
        }
        else{
          echo '<script type="text/javascript">alert("incorrect_pass!!!")</script>';
        }
        
    }

?>
  </body>
</html>
