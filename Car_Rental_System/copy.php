<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>My Car Rental Website</title>
</head>

<body>
    <div class="mainlog">
        <div class="Twologins">
            <div class=" login userlogin">
                <form action="" method="POST">
                    <h2>Register</h2>
                    <div class="username">
                        <i class="fa-solid fa-user" style="color: #276add;"></i>
                        <input type="text" name="username" placeholder="Enter your Username" required="">
                    </div>
                    <div class="password">
                        <i class="fa-sharp fa-solid fa-lock" style="color: #276add;"></i>
                        <input type="password" name="password" placeholder="Enter your password" required="">
                    </div>
                    <div class="password">
                        <i class="fa-sharp fa-solid fa-lock" style="color: #276add;"></i>
                        <input type="password" name="confirmpassword" placeholder="Confirm your password" required="">
                    </div>
                    <div class="button1">
                        <button type="submit" name="Login1"> Login</button>
                    </div>

                </form>
            </div>
           
    </div>

    <?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
    if(isset($_POST['Login1']))
     { 
      $username=$_POST['username'];
      $password=$_POST['password'];
      $confirm_password=$_POST['confirmpassword'];
      $user="user";
      if($confirm_password == $password)
      {
        $query1="INSERT INTO `user`(`user_id`, `username`, `password`, `type`) VALUES ('rand(1000,9999)','$username','$password','$user')";
        $result88=mysqli_query($con,$query1);
        if($result88)
        {
           echo '<script> window.location="index.php";</script>';
        }

      }
    }
     }
    ?>
       
</body>

</html>