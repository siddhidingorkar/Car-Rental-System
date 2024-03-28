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
                    <h2>User Login</h2>
                    <div class="username">
                        <i class="fa-solid fa-user" style="color: #276add;"></i>
                        <input type="text" name="username" placeholder="Enter your Username" required="">
                    </div>
                    <div class="password">
                        <i class="fa-sharp fa-solid fa-lock" style="color: #276add;"></i>
                        <input type="password" name="password" placeholder="Enter your password" required="">
                    </div>
                    <div class="button1">
                        <button type="submit" name="Login1"> Login</button>
                    </div>
                    <div class="others">
                        <p>
                            Don't have an account ?<br>
                            <a href="copy.php">Register now</a>
                        </p>
                    </div>
                </form>
            </div>
            <div class="login AdminLogin">
                <form action="" method="POST">
                    <h2>Admin Login</h2>
                    <div class="username">
                        <i class="fa-solid fa-user" style="color: #276add;"></i>
                        <input type="text" name="username" placeholder="Enter your Username" required="">
                    </div>
                    <div class="password">
                        <i class="fa-sharp fa-solid fa-lock" style="color: #276add;"></i>
                        <input type="password" name="password" placeholder="Enter your password" required="">
                    </div>
                    <div class="button2">
                        <button type="submit" name="Login2">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if(isset($_POST['Login1']))
    {
      $query="SELECT * FROM `user` WHERE `username`='$_POST[username]' and `password`='$_POST[password]'";
      $result=mysqli_query($con,$query);
      if(mysqli_num_rows($result)==1)
      {
        session_start();
        $_SESSION['user']=$_POST['username'];
        header("location: userpage.php");
        
      }
      else{
        echo"<script>alert('Incorrect Username or password') </script>";
      }
    }
    ?>

<?php
    if(isset($_POST['Login2']))
    {
      $query="SELECT * FROM `user` WHERE `username`='$_POST[username]' and `password`='$_POST[password]'";
      $result=mysqli_query($con,$query);
      if(mysqli_num_rows($result)==1)
      {
        session_start();
        $_SESSION['userid']=$_POST['username'];
        header("location: adminpage.php");
        
      }
      else{
        echo"<script>alert('Incorrect Username or password') </script>";
      }
    }
    ?>
       
</body>

</html>