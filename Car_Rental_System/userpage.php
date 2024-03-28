<?php
session_start();
include("connect.php");
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link  rel="stylesheet "href="styles1.css">
    <title>Document</title>
</head>
<body>
 
<nav class="nav">
            <div class="br">
                <p id="p1">Car</p>
                <p>Rental </p>
                <i class="fa-solid fa-car" style="color: #ffffff;"></i>
            </div>
            <div class="navbar">
                <div class="user">
                <i class="fa-solid fa-user" style="color: #276add;"></i>
                <p class="user"><?php echo $_SESSION['user']?></p>
                </div>

                <a href="#ABOUT">About</a>
                <a href="">Contact</a>
            </div>
</nav>



<div class="cars_row1">
    <div class="image">
    <img src="images/image99.png" alt="">
    </div>
    <h2 id="fleet">Our Fleet</h2>

    <div class="ABOUT">
            <h2 class="about">About Suv's</h2>
            <p class="para">SUVs are a type of vehicle that combines the practicality of a station wagon or minivan with the ruggedness and off-road capability of a truck. They are typically larger than a sedan or hatchback, and are designed to be versatile enough to handle a variety of driving conditions and terrains.
                             SUVs come in a wide range of sizes and styles, from compact models that are easy to maneuver in tight spaces to full-size models that offer ample passenger and cargo space. Some popular SUV models include the Toyota RAV4, Honda CR-V, Ford Explorer, and Jeep Grand Cherokee.
            </p>
            <h2 class="types">SUV</h2>
            <div class="contacts">
              <div class="contact">
                <img src="images/suv/fortuner.avif" alt="">
                <h3>Fortuner</h3>
                <p class="des">Rating - 4/5</p>
                <p class="info">1250/- per day</p>
                <form action="" method="POST">
                    <label for="datefrom">Choose date from</label><br>
                    <input type="date" name="datefrom" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from"><br>
                    <label for="dateto">Choose date from</label><br>
                    <input type="date" name="dateto" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from">
                    <button type="submit" name="book">Book</button>
                    <input type="hidden" name="carname" value="Fortuner">
                    <input type="hidden" name="category" value="Suv">
                </form>
              </div>
              <div class="contact">
                <img src="images/suv/brezza.avif" alt="">
                <h3>Brezza</h3>
                <p class="des">Rating - 4/5</p>
                <p class="info">1250/- per day</p>
                <form action="" method="POST">
                    <label for="datefrom">Choose date from</label><br>
                    <input type="date" name="datefrom" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from"><br>
                    <label for="dateto">Choose date from</label><br>
                    <input type="date" name="dateto" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from">
                    <input type="hidden" name="carname" value="Brezza">
                    <input type="hidden" name="category" value="Suv">
                    <button type="submit" name="book">Book</button>
                </form>
              </div>
              <div class="contact" >
                <img src="images/suv/nexon.avif" alt="">
                <h3>Nexon</h3>
                <p class="des">Rating - 4/5</p>
                <p class="info">1250/- per day</p>
                <form action="" method="POST">
                    <label for="datefrom">Choose date from</label><br>
                    <input type="date" name="datefrom" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from"><br>
                    <label for="dateto">Choose date from</label><br>
                    <input type="date" name="dateto" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from">
                    <input type="hidden" name="carname" value="Nexon">
                    <input type="hidden" name="category" value="Suv">
                    <button type="submit" name="book">Book</button>
                </form>
              </div>
              <div class="contact">
                <img src="images/suv/fronx.avif" alt="">
                <h3>Fronx</h3>
                <p class="des">Rating - 4/5</p>
                <p class="info">1250/- per day</p>
                <form action="" method="POST">
                    <label for="datefrom">Choose date from</label><br>
                    <input type="date" name="datefrom" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from"><br>
                    <label for="dateto">Choose date from</label><br>
                    <input type="date" name="dateto"  value="<?php echo date('Y-m-d'); ?>"placeholder="Enter date from">
                    <input type="hidden" name="carname" value="Fronx">
                    <input type="hidden" name="category" value="Suv">
                    <button type="submit" name="book">Book</button>
                </form>
              </div>

            </div>
    </div>

    <div class="ABOUT" >
            <h2 class="about">About Sedan</h2>
            <p class="para">Sedans are a popular type of passenger car that are characterized by their traditional four-door design and enclosed passenger compartment. Sedans are typically smaller and more maneuverable than larger vehicles like SUVs or trucks, making them a popular choice for urban driving.
                             Sedans come in a wide range of sizes and styles, from compact models like the Honda Civic or Toyota Corolla to mid-size models like the Toyota Camry or Honda Accord. Luxury brands like Mercedes-Benz, BMW, and Audi also offer a range of sedan models with premium features and amenities.
            </p>
            <h2 class="types">Sedan</h2>
            <div class="contacts">
              <div class="contact">
                <img src="images/sedan/hcity.avif" alt="">
                <h3>Honda City</h3>
                <p class="des">Rating - 4/5</p>
                <p class="info">750/- per day</p>
                <form action="" method="POST">
                    <label for="datefrom">Choose date from</label><br>
                    <input type="date" name="datefrom"  value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from"><br>
                    <label for="dateto">Choose date from</label><br>
                    <input type="date" name="dateto" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from">
                    <input type="hidden" name="carname" value="Honda City">
                    <input type="hidden" name="category" value="Sedan">
                    <button type="submit" name="book">Book</button>
                </form>
              </div>
              <div class="contact">
              <img src="images/sedan/slavia.avif" alt="">
                <h3>Slavia</h3>
                <p class="des">Rating - 4/5</p>
                <p class="info">750/- per day</p>
                <form action="" method="POST">
                    <label for="datefrom">Choose date from</label><br>
                    <input type="date" name="datefrom" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from"><br>
                    <label for="dateto">Choose date from</label><br>
                    <input type="date" name="dateto" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from">
                    <input type="hidden" name="carname" value="Slavia">
                    <input type="hidden" name="category" value="Sedan">
                    <button type="submit" name="book">Book</button>
                </form>
              </div>
              <div class="contact" >
              <img src="images/sedan/verna.avif" alt="">
                <h3>Verna</h3>
                <p class="des">Rating - 4/5</p>
                <p class="info">2750/- per day</p>
                <form action="" method="POST">
                    <label for="datefrom">Choose date from</label><br>
                    <input type="date" name="datefrom" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from"><br>
                    <label for="dateto">Choose date from</label><br>
                    <input type="date" name="dateto" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from">
                    <input type="hidden" name="carname" value="Verna">
                    <input type="hidden" name="category" value="Sedan">
                    <button type="submit" name="book">Book</button>
                </form>
              </div>
              <div class="contact">
              <img src="images/sedan/virtus.avif" alt="">
                <h3>Virtus</h3>
                <p class="des">Rating - 4/5</p>
                <p class="info">750/- per day</p>
                <form action="" method="POST">
                    <label for="datefrom">Choose date from</label><br>
                    <input type="date" name="datefrom" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from"><br>
                    <label for="dateto">Choose date from</label><br>
                    <input type="date" name="dateto" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from">
                    <input type="hidden" name="carname" value="Virtus">
                    <input type="hidden" name="category" value="Sedan">
                    <button type="submit" name="book">Book</button>
                </form>
              </div>

            </div>
    </div>

    <div class="ABOUT">
            <h2 class="about">About Hatchback</h2>
            <p class="para">Hatchbacks are a type of car that are characterized by their rear cargo door, which is hinged at the roof and opens upwards. Hatchbacks are typically smaller than other types of passenger cars, and are designed to be practical and versatile for urban driving.
                            Hatchbacks come in a wide range of sizes and styles, from subcompact models like the Honda Fit or Toyota Yaris to mid-size models like the Volkswagen Golf or Mazda3. They often offer a sportier and more stylish design than traditional sedans, with a sloping rear roofline and a compact overall size.
            </p>
            <h2 class="types">Hatchback</h2>
            <div class="contacts">
              <div class="contact">
                <img src="images/hatchback/alto.avif" alt="">
                <h3>Alto</h3>
                <p class="des">Rating - 4/5</p>
                <p class="info">650/- per day</p>
                <form action="" method="POST">
                    <label for="date">Choose date from</label><br>
                    <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from"><br>
                    <label for="date">Choose date from</label><br>
                    <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from">
                    <input type="hidden" name="carname" value="Alto">
                    <input type="hidden" name="category" value="Hatchback">
                    <button type="submit" name="book">Book</button>
                </form>
              </div>
              <div class="contact">
                <img src="images/hatchback/baleno.avif" alt="">
                <h3>Baleno</h3>
                <p class="des">Rating - 4/5</p>
                <p class="info">650/- per day</p>
                <form action="" method="POST">
                    <label for="date">Choose date from</label><br>
                    <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from"><br>
                    <label for="date">Choose date from</label><br>
                    <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from">
                    <input type="hidden" name="carname" value="Baleno">
                    <input type="hidden" name="category" value="Hatchback">
                    <button type="submit" name="book">Book</button>
                </form>
              </div>
              <div class="contact" >
                <img src="images/hatchback/swift.avif" alt="">
                <h3>Swift</h3>
                <p class="des">Rating - 4/5</p>
                <p class="info">650/- per day</p>
                <form action="" method="POST">
                    <label for="date">Choose date from</label><br>
                    <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from"><br>
                    <label for="date">Choose date from</label><br>
                    <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from">
                    <input type="hidden" name="carname" value="Swift">
                    <input type="hidden" name="category" value="Hatchback">
                    <button type="submit" name="book">Book</button>
                </form>
              </div>
              <div class="contact">
                <img src="images/hatchback/wagonr.avif" alt="">
                <h3>Wagonr</h3>
                <p class="des">Rating - 4/5</p>
                <p class="info">650/- per day</p>
                <form action="" method="POST">
                    <label for="date">Choose date from</label><br>
                    <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from"><br>
                    <label for="date">Choose date from</label><br>
                    <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" placeholder="Enter date from">
                    <input type="hidden" name="carname" value="Wagonr">
                    <input type="hidden" name="category" value="Hatchback">
                    <button type="submit" name="book">Book</button>
                </form>
              </div>

            </div>
    </div>
  
</div>

<?php
if(isset($_POST['book']))
{
   $carname=$_SESSION['carname']=$_POST['carname'];
   $_SESSION['datefrom']=date('Y-m-d',strtotime($_POST['datefrom']));
   $_SESSION['dateto']= date('Y-m-d',strtotime($_POST['dateto']));
   $_SESSION['username']=$_SESSION['user'];
   $category=$_SESSION['category']=$_POST['category'];
   $query1="SELECT * FROM `car_info` WHERE model_name='$carname' and car_category='$category'";
   $result=mysqli_query($con,$query1);
   $row=mysqli_fetch_assoc($result);
   $_SESSION['regno']=$row['reg_no'];
   $availflag=$row['Available_status'];
   
   
if($availflag==1)
{
$ran_book=rand(1000,9999);
$query99='INSERT INTO `booking`(`book_id`, `username`,`datefrom`, `dateto`, `carname`, `regno`, `carcategory`) VALUES ("'.$ran_book.'","'.$_SESSION['username'].'","' .$_SESSION['datefrom']. '","' .$_SESSION['dateto']. '","' .$_SESSION['carname']. '","' .$_SESSION['regno']. '","' .$_SESSION['category']. '")';
$a=mysqli_query($con,$query99);

   // echo "<script>alert('booked successfully')</script>"; 
   header("location: pay.php");
   //Insert data after payment gateway;
}
else
{
  echo"<script>alert('Sorry car is already booked , select some other car')</script>";
}
}
?>
</body>
</html>