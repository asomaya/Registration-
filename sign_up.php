<?php   
 //index.php  
 $conn=mysqli_connect('localhost','root','','lab5') or die();  
 $msg="";  
 $passwordErr="";
 if (isset($_POST['sign_up'])) {  
      $name=$_POST['name'];  
      $password=$_POST['password'];
      $re_password=$_POST['re_password'];
      if($password !== $re_password){
     
          $passwordErr = "The confirmation password  does not match";
      }else {
       
     
    
      $query= "INSERT INTO `users`(`name`, `password`) VALUES ('$name','$password')";  
      $data=mysqli_query($conn,$query);  
      if ($data) {  
           $msg="Your data inserted successfully";  
      }else{  
           $msg="Try after some time !";  
      }   }
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Insert data in database using PHP MySQLi</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }  

           .error {color: #FF0000;}
           body{  
                background: #5d6d7d;  
                width: 100%;  
                min-height: 100vh;  
                display: flex;  
                justify-content: center;  
                align-items: center;  
           }  
           .container{  
                width: 500px;  
                background: #fff;  
           }  
           .container form{  
                width: 100%;  
                padding: 30px;  
           }  
           .container form input{  
                width: 100%;  
                padding: 15px 10px;  
                outline: none;  
                margin: 10px 0;  
           }  
           .btn{  
                cursor: pointer;  
                background: red;  
                border: none;  
                padding: 10px 30px;  
                color: #fff;  
           }  
           h1{  
                display: block;  
                text-align: center;  
                padding-top: 20px;  
           }  
      </style>  
 </head>  
 <body>  
 <div class="container">  
      <h1>sign up</h1>  
      <p>please fill this form to create an account</p>
      <form method="post" action="">  
           <input type="text" name="name" placeholder="Enter your name" required>  
           <input type="password" name="password" placeholder="Enter your password" required>  
           <input type="password" name="re_password" placeholder="confirm your password" required> 
           <span class="error"> <?php echo $passwordErr;?></span>
           <input type="submit" name="sign_up" value="submit" class="btn"><br>  
<p>Already have an account <a href="http://localhost/lab/lab5/login.php">login here</a></p>
           <?php echo $msg; ?>  
      </form>  
 </div>  
 </body>  
 </html>  