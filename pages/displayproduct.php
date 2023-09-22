<?php
include "config.php";
$id=$_GET['id'];
$row=mysqli_query($conn,"select * from product where id=$id");
$data=mysqli_fetch_array($row);
$name=$data['name'];
$image=$data['image'];
$price=$data['price'];
$Quantity=$data['Quantity'];
$Description=$data['Description'];
$discount=$data['discount'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banners</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Rubik:ital,wght@0,400;1,300&family=Tajawal:wght@300;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="displayproduct.css">
   <link rel="icon" href="living-room.png">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Poppins:wght@200;300&family=Rubik:ital,wght@0,400;1,300&family=Tajawal:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
   <form action="Banner.php">
    
    <div id="main">
      
       <div id="image">
          <?php
          echo "<img src='$image'>";
          ?>
       </div>
       <div id="part2">
        <h3><?php echo $name;?></h3>
        <p id="price"><b><?php echo $price;?></b></p>
        <div id="rowcolorsize">
            <div >
                <p>Color</p>
                <!-- color -->
                <div id="circlecolor"></div>
                <div id="circlecolor" style="background-color:#050302 ;"></div>
                <div id="circlecolor" style="background-color:#EE6969 ;"></div>
            </div>
            <div id="divsize">
                <p>Size</p>
                <!-- size -->
                <p id="size">S</p>
                <p id="size">L</p>
                <p id="size">XL</p>
            </div>
        </div>
        <h4>Description</h4>
        <p id="Description"><?php echo $Description;?></p>
         <div id="Quantity">
            <p id="q1">Quantity</p>
            <p id="p1"><?php echo $Quantity;?></p>
        </div>
        <div id="Quantity">
            <p id="q1">categories</p>
            <p id="p2">dresses</p>
        </div>
       
    </div>
 <div id="rowclose">
            <a href="Products.php" id="close"><i class="fa fa-close"></i></a>
          </div>
    </div>
   </form>
</body>
</html>