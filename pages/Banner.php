<?php
include "config.php";

$select=mysqli_query($conn,"select * from banner");

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
   <link rel="stylesheet" href="Banner.css">
   <link rel="icon" href="living-room.png">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Poppins:wght@200;300&family=Rubik:ital,wght@0,400;1,300&family=Tajawal:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <div id="main">
        <div id="part1">
           <img src="../images/logo.png" id="logo" style="  margin-left: 50px;">
           <a href="buyers.php"><div id="row2"><i class="fa fa-user" ><pre style="display:inline-block">  Buyers</pre></i></div></a>
           <a href="Banner.php"><div id="row1" ><i class="fa fa-plus" style="color:rgb(0, 0, 0)"><pre style="display:inline-block" >  Banners</pre></i></div></a>
           <a href="categories.php"><div id="row2"><i class="fa fa-th-large"><pre style="display:inline-block">  Categories</pre></i></div></a>
           <a href="Products.php"><div id="row2"><i class="fa fa-shopping-cart" ><pre style="display:inline-block">  Broducts</pre></i></div></a>
        </div>
        <div id="part2">
            <div id="part21">
                Banners
            </div>
            <div id="part22">
               <?php
                      
                      while($one_row=mysqli_fetch_array($select)){
                        echo "<img src='".$one_row['image']."' style='margin-left:10px'>";
                        
                      }


                ?>

                
            </div>
            <a href="addbanners.php" id="add">+</a>
        </div>
       
    </div>
  
</body>
</html>