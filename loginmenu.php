<!DOCTYPE html>
<html>
<head>
	<title>Mashimbe Online Ticket login menu</title>




   <style type="text/css">
    body{
        background-image: url(./images/1.jpg);
           background-size: cover;
          background-repeat: no-repeat;
          background-attachment: fixed;
    }
   	     
   	     .box{
   	     	width: 500px;
		    height: 250px;
		   /* border: 1px solid black;*/
		    /* align-content: center; */
		    margin: auto;
		    margin-top: 70px;
   	     }
   	     .box1{

   	     	width:500px;
   	     	height: 122px;
   	     	border: 1px solid #fff;
   	     	background-color: rgba(1,3,0.3,0.5);
   	     	border-radius: 10px;

   	     }
   	     .box2{

   	     	width:500px;
   	     	height: 122px;
   	     	border: 1px solid #fff;
   	     	background-color: rgba(1,3,0.3,0.5);
   	     	border-radius: 10px;
   	     	margin-top: 5px;
   	     }
   	     .box1:hover{

   	     	cursor: pointer;
   	     	background-color: black;
   	     	color: #fff;
   	     }
   	     .box2:hover{
   	     	cursor: pointer;
   	     	background-color: black;
   	     	color: #fff;
   	     }
   	     .loginMenu{
   	     	text-align: center;
   	     	color: #fff;
   	     	font-size: 38px;
   	     }
   	     body{
   	     	background-image: url(image/5.jpg);
   	     	background-repeat: no-repeat;
   	     	background-size: cover;
   	     	background-position: center;
   	     	background-attachment: fixed;
   	     }
   	     .menu{

   	     /*	text-transform: uppercase;*/
   	     	color: #fff;
   	     	/*color: #f44336;*/
            text-align: center;
            text-decoration: none;
            margin-top: 43px;

   	     }
   	     .menu:hover{
   	     	color: #f44336;
   	     	font-size: 36px;
   	     }


   </style>

   <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer.css">
</head>
<body>

<h1 class="loginMenu">LOGIN MENU</h1>
   <div class="box">
      <a href="login.php">
             <div class="box1">
             	<h1 class="menu">User Login</h1>
           </div>
      </a>

      <a href="adminlogin.php">
             <div class="box2">
             	<h1 class="menu">Admin Login</h1>
             </div>
      </a>
   </div>
</body>
</html>