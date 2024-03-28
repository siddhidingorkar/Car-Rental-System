<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>My Car Rental Website</title>
</head>
<body>

<nav class="nav">
            <div class="br">
                <p id="p1">Car</p>
                <p>Rental </p>
                <i class="fa-solid fa-car logo" style="color: #ffffff;"></i>
            </div>
            <div class="navbar">
                <div class="user">
                <i class="fa-solid fa-user" style="color: #276add;"></i>
                <p class="user"><?php echo $_SESSION['userid']?></p>
                </div>

                <a href="#ABOUT">About</a>
                <a href="">Contact</a>
            </div>
</nav>



<div class="heading"><h2 class="users">Users</h2></div>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>
  <?php
     $query2="SELECT * from `user`";
     $result=mysqli_query($con,$query2);
     while($row=mysqli_fetch_assoc($result))
    {
        echo
       " <tr>
        <th scope='row'>". $row['user_id'] ."</th>
        <td>". $row['username'] ."</td>
        <td>". $row['password'] ."</td>
        <td>". $row['type'] ."</td>
      </tr>";
        
    }

  ?>
   
  </tbody>
</table>
<h2 class="users">Add an User</h2>
<div class="add">
<form action="" method="POST">
    <input type="number" required="" placeholder="ID" name="id">
    <input type="text" required="" placeholder="Username" name="username">
    <input type="passwword" required="" placeholder="password" name="pass">
    <input type="text" required="" placeholder="type" name="type">
    <button type="submit" name="submit">Add user</button>
</form>
</div>

<?php
     if($_SERVER['REQUEST_METHOD']=='POST')
     {  if(isset($_POST['submit']))
        {
        $_userid=$_POST['id'];
        $_username=$_POST['username'];
        $_pass=$_POST['pass'];
        $_type=$_POST['type'];

        $query="INSERT INTO `user`(`user_id`, `username`, `password`, `type`) VALUES ('$_userid',' $_username','$_pass','$_type')";
        $result1=mysqli_query($con,$query);
        if($result1)
        {
            //echo "Record inserted successfully";
        }
        else
        {
            echo "Insertion failed";
        }
        }
        
     }
  ?>


<h2 class="users">Delete an User</h2>
<div class="add">
<form action="" method="POST">
    <input type="number" required="" placeholder="ID" name="id">
    <button type="submit" name="submit1">Delete user</button>
</form>
</div>

<?php
     if($_SERVER['REQUEST_METHOD']=='POST')
     {  if(isset($_POST['submit1']))
        {
        $_userid=$_POST['id'];
        
        $query="DELETE FROM user where `user_id`='$_userid'";
        $result3=mysqli_query($con,$query);
        }
    
     }
?>

<?php
 // Car customization
?>

<div class="heading"><h2 class="users">Cars</h2></div>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Registration no</th>
      <th scope="col">Model</th>
      <th scope="col">Mileage</th>
      <th scope="col">car_category</th>
    </tr>
  </thead>
  <tbody>
  <?php
     $query23="SELECT * from `car_info`";
     $result22=mysqli_query($con,$query23);
     while($row4=mysqli_fetch_assoc($result22))
    {
        echo
       " <tr>
        <th scope='row'>". $row4['reg_no'] ."</th>
        <td>". $row4['model_name'] ."</td>
        <td>". $row4['mileage'] ."</td>
        <td>". $row4['car_category'] ."</td>
      </tr>";
        
    }

  ?>

 </tbody>
</table>

<h2 class="users">Add a car</h2>
<div class="add">
<form action="" method="POST">
    <input type="text" required="" placeholder="regno" name="regno">
    <input type="text" required="" placeholder="model" name="model">
    <input type="text" required="" placeholder="mileage" name="mileage">
    <input type="text" required="" placeholder="category" name="category">
    <button type="submit" name="submit3">Add car</button>
</form>
</div>

<?php
     if($_SERVER['REQUEST_METHOD']=='POST')
     {  if(isset($_POST['submit3']))
        {
        $regno=$_POST['regno'];
        $model=$_POST['model'];
        $mileage=$_POST['mileage'];
        $category=$_POST['category'];

        $query33="INSERT INTO `car_info`(`reg_no`, `model_name`, `mileage`, `car_category`) VALUES ('$regno','$model','$mileage','$category')";
        $result33=mysqli_query($con,$query33);
        if($result33)
        {
            //echo "Record inserted successfully";
        }
        else
        {
            echo "Insertion failed";
        }
        }
        
     }
  ?>
  
  <h2 class="users">Delete a Car</h2>
<div class="add">
<form action="" method="POST">
    <input type="text" required="" placeholder="regno" name="regno">
    <button type="submit" name="submit4">Delete Car</button>
</form>
</div>

<?php
     if($_SERVER['REQUEST_METHOD']=='POST')
     {  if(isset($_POST['submit4']))
        {
        $_regno=$_POST['regno'];
        
        $query44="DELETE FROM car_info where `reg_no`='$_regno'";
        $result44=mysqli_query($con,$query44);
        }
    
     }
?>

<?php
// User present Bookings
?>


<div class="heading"><h2 class="users">Present Bookings</h2></div>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Booking id</th>
      <th scope="col">username</th>
      <th scope="col">datefrom</th>
      <th scope="col">dateto</th>
      <th scope="col">carname</th>
      <th scope="col">Reg_no</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php
     $query23="SELECT * from `booking`";
     $result27=mysqli_query($con,$query23);
     while($row44=mysqli_fetch_assoc($result27))
    {
        echo
       " <tr>
        <th scope='row'>". $row44['book_id'] ."</th>
        <td>". $row44['username'] ."</td>
        <td>". $row44['datefrom'] ."</td>
        <td>". $row44['dateto'] ."</td>
        <td>". $row44['carname'] ."</td>
        <td>". $row44['regno'] ."</td>
        <td>". $row44['status'] ."</td>
      </tr>";
        
    }

  ?>

</tbody>
</table>

<h2 class="users">Update Status</h2>
<div class="add">
<form action="" method="POST">
    <input type="text" required="" placeholder="bookingid" name="bookingid">
    <button type="submit" name="submit5">update Returned</button>
</form>
</div>

<?php
     if($_SERVER['REQUEST_METHOD']=='POST')
     {  if(isset($_POST['submit5']))
        {
        $bookid=$_POST['bookingid'];
        $query76="SELECT * FROM `booking` WHERE book_id=$bookid";
        $result76=mysqli_query($con,$query76);
        $row76=mysqli_fetch_assoc($result76);
        $register=$row76['regno'];
        $avail="Availaible";
        $query66="UPDATE `car_info` SET `Available_status`=1 WHERE `reg_no`='$register'";
        $result66=mysqli_query($con,$query66);
        

        $query44="call update_status($bookid)";
        $result44=mysqli_query($con,$query44);
        
        
        }
    
     }
?>















</body>