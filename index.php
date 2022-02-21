<?php   
 session_start();  
 $conn=mysqli_connect("localhost","root","","lab5");  
 if (!isset($_SESSION['USER_ID'])) {  
      header("location:login.php");  
      die();  
 }  
 ?>  
  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1">  
      <title>Dashboard</title>  
      <style>  
           @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap');  
           body{  
                display: flex;  
                justify-content: space-around;  
                font-family: 'Poppins', sans-serif;  
                background-image: url(img1.jpg);
           }  
      </style>  
 </head>  
 <body>  
 <h1>Hi <?php echo $_SESSION['USER_NAME'] ?> welcome to our site</h1><br>  

 <h2><a href="logout.php">Logout</a></h2>  
 </body>  
 </html>  