<?php   
 session_start();  
 $conn=mysqli_connect("localhost","root","","lab5");  
 $msg="";  
 if (isset($_POST['submit'])) {  
      //echo "<pre>";  
      //print_r($_POST);  
      $email=mysqli_real_escape_string($conn,$_POST['email']);  
      $password=mysqli_real_escape_string($conn,$_POST['password']);  
      $sql=mysqli_query($conn,"select * from users where name='$email' && password='$password'");  
      $num=mysqli_num_rows($sql);  
      if ($num>0) {  
           //echo "found";  
           $row=mysqli_fetch_assoc($sql);  
           $_SESSION['USER_ID']=$row['id'];  
           $_SESSION['USER_NAME']=$row['name'];  
           header("location:index.php");  
      }else{  
           $msg="Please Enter Valid details !";  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1">  
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
      <title>Login Page</title>  
 </head>  
 <body>  
 <div class="container">  
      <div class="flex">  
           <div class="content">  
                <h1 >Login</h1> 
                <p>please fill in your credential to login</p> 
                <form method="post" action="">  
                     <label for="username">Username</label>  
                     <div class="box">  
                          <input type="text" name="email" placeholder="Username" class="form-control" required>  
                     </div>  
                     <label for="password">Password</label>  
                     <div class="box">  
                          <input type="password" name="password" placeholder="Password" class="form-control" required>  
                     </div>  
                     <div class="btn-box">  
                          <input type="submit" name="submit" value="Login" class="btn submit-btn">  
                          <p>Don't have an account <a href="http://">sign up now.</a></p>
                     </div>  
                     <div class="error">  
                          <?php echo $msg ?>  
                     </div>  
                </form>  
           </div>  
      </div>  
 </div>  
 </body>  
 </html>  