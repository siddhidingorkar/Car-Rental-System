<?php
    include('connect.php');
    session_start();
    $user=$_SESSION['user'];
    $category=$_SESSION['category'];
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
    $get_user="SELECT * from `user` where username='$user'";
    $user_query=mysqli_query($con,$get_user);
    $run_query=mysqli_fetch_array($user_query);
    $user_id=$run_query['username'];
  ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
        <!-- bootstrap link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>


<?php
$dat1=date_create($_SESSION['datefrom']);
$dat2=date_create($_SESSION['dateto']);
$datediff=date_diff($dat1,$dat2);
$totaldays=intval($datediff->format("%d"));
$query21="SELECT * from cars where `category`='" .$_SESSION['category']. "'";
$result77=mysqli_query($con,$query21);
$row21=mysqli_fetch_assoc($result77);
$costperday=$row21['cost_per_day'];
$_SESSION['cost_per_day']=$costperday * $totaldays;

?>

<h2>Payment Gateway</h2> <br>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">car</th>
      <th scope="col">date_from</th>
      <th scope="col">date_to</th>
      <th scope="col">Type</th>
      <th scope="col">Total Cost</th>
    </tr>
  </thead>
  <tbody>
  <?php
    
        echo
       " <tr>
        <th scope='row'>". $_SESSION['carname'] ."</th>
        <td>". $_SESSION['datefrom'] ."</td>
        <td>". $_SESSION['dateto'] ."</td>
        <td>". $_SESSION['category'] ."</td>
        <td>". $_SESSION['cost_per_day'] ."</td>
      </tr>";

   ?>   
        
 
   
  </tbody>
</table>

<div class="container">
      <h2 class="text-center text-info">Payment Options</h2>
      <form action="" method="POST"> 
      <div class="row mx-5 my-5 mb-5 justify-content-center align-items-center">  
      <div class="col-md-6">
              <a style="padding-left:50%" href="https://www.paypal.com" target="_blank" name="payonline"><img src="payment.jpg" alt=""></a>
          </div>
      </form>    
          <div class="col-md-6">
            <form action="" method="POST">
              <button type="submit" name="submit3">Pay Offline</button>
           </form>
          </div>
        </div>
</div>  

<?php

if(isset($_POST['submit3']))
{
  echo "<script> alert('Booked successfully')</script>";
}

?>

<?php

if(isset($_POST['payonline']))
{
  echo "<script> alert('Booked successfully')</script>";
}

?>



</body>
</html>
