<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mashimbe Online Multiple Bus Ticket Booking</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer.css">
  <!--  <link rel="stylesheet" type="text/css" href="cssfile/container.css">-->
   <link rel="stylesheet" type="text/css" href="cssfile/videoedit.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style type="text/css">
      body{
           background-image: url(./images/1.jpg);
           background-size: cover;
          background-repeat: no-repeat;
          background-attachment: fixed;
            }
.home_details{
  color: #fff;
  font-family: inherit;
  font-size: 74px;
  padding: 162px 5px 5px 185px;

}
.font{

  color: #F9522E;
}
.btnHome{

    font-family: inherit;
    background-color: #F9522E;
    padding: 13px 44px 13px 44px;
    font-size: 18px;
    border-style: none;
}
.btnHome:hover{
  background-color: orange;
  cursor: pointer;
} 
.slider {
            width: 100%;
            overflow: hidden;
        }

        .slides {
            display: flex;
            width: 300%;
            animation: slide 10s infinite;
        }

        .slides img {
            width: 33.33%;
        }

        @keyframes slide {
            0% {
                margin-left: 0;
            }
            33% {
                margin-left: -100%;
            }
            66% {
                margin-left: -200%;
            }
            100% {
                margin-left: 0;
            }
        } 
    </style>
  </head>
  <body>
  <div id="container">
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top">
      <ul>
        <li class="logo"><h4>Mashimbe</h4></li>
        <li class="btn"><span class="fas fa-bars"></span></li>
        <div class="items">
          <li><a href="index.php">Home</a></li>
          <li><a href="help.php">Help</a></li>
       <!--   <li><a href="#">Ticket Book</a></li>-->

         
         <!-- <li><a href="#">Packages</a></li>-->
          <li><a href="loginMenu.php">Login</a></li>
          <li><a href="bout_us.php">About Us</a></li>
           <li><a href="contact.php">Contact Us</a></li>
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

                  <h1 class="home_details">Your Bus Pass.Anytime. <br><font class="font">Anywhere..</font>
                  <br>
                       <a href="signup.php"> <button class="btnHome">SIGN UP NOW</button></a>
                  </h1>
  </div>

</div>
<div class="slider">
  <p><h5 class="home_details">Enjoy Our Services</h5></p>
        <div class="slides">
            <img src="./images/bus4.jpg" alt="">
            <img src="./imag.jpg" alt="">
            <img src="./images/sbus.jpg" alt="">
        </div>
    </div>
<footer class="navbar navbar-expand-lg bg-secondary fixed-top">
        <div class="footerInfo">
            <div class="footerContainer">
                <div class="footerItem">

                    <div class="socialInfo">
                        <div class="mainTitle">
                            <h4> Follow Us <span></span></h4>
                        </div>
                        <div class="socialItem">
                            <div class="socialLink facebook">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <div class="socialLink instagram">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="socialLink twitter">
                                <i class="fab fa-twitter"></i>
                            </div>
                        </div>
                    </div>
<!--  -->
                    <div class="socialInfo">
                        <div class="mainTitle">
                            <h4> Service <span></span></h4>
                        </div>
                        <div class="socialItem">
                            <a href="#"> Emergency dental care </a>
                            <a href="#"> check up</a>
                            <a href="#"> treatment of personal diseases </a>
                            <a href="#"> tooth extraction </a>
                        </div>
                    </div>
<!--  -->
                    <div class="socialInfo">
                        <div class="mainTitle">
                            <h4> Our Health <span></span></h4>
                        </div>
                        <div class="socialItem">
                            <a href="#"> Emergency dental care </a>
                            <a href="#"> check up</a>
                            <a href="#"> treatment of personal diseases </a>
                            <a href="#"> tooth extraction </a>
                        </div>
                    </div>
<!--  -->
                    <div class="socialInfo">
                        <div class="mainTitle">
                            <h4> Address <span></span></h4>
                        </div>
                        <h5 class="addressTitle">Morogoro Tanzania</h5>
                        <div class="callInfo">
                            <h6>Call</h6> <i class="fas fa-arrow-right"></i>
                            <span>+255675018671</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>


  </body>
</html>











