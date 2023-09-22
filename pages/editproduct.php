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

if(isset($_POST['save'])){
   $add=$_POST['additional'];
   $value=intval($add)+intval($Quantity);
   $dis=$_POST['Description'];
   $edit=mysqli_query($conn,"UPDATE product SET Quantity='$value',`Description`= '$dis' where id=$id ");
  header("location:Products.php");
}
 
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
   <link rel="stylesheet" href="editproduct.css">
   <link rel="icon" href="living-room.png">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Poppins:wght@200;300&family=Rubik:ital,wght@0,400;1,300&family=Tajawal:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
   <form method="POST">
    
    <div id="main">
      
       <div id="image">
          <img src="<?php echo $image?>">
       </div>
       <div id="part2">
        <h3>Sportwear Set</h3>
        <p id="price"><b>$ 80.00</b></p>

        <h4>Description</h4>
        <textarea id="Description" name="Description" ><?php  echo $Description;?></textarea>
         <div id="Quantity">
            <p id="q1">The avaiable quantity</p>
            <p id="p1"><?php  echo $Quantity;?></p>
        </div>
        <div id="Quantity">
            <p id="q1">The additional quantity</p>
           <input placeholder="100" id="input" name="additional" >
        </div>
        <div id="Quantity">
            <p id="q1">categories</p>
           <select id="select">
            <option>dresses</option>
            <option>dresses</option>
            <option>dresses</option>
            <option>dresses</option>
           </select>
        </div>
        <div id="Quantity">
            <p id="q1">Discount</p>
           <input type="checkbox" >
        </div>
        <div id="Quantity">
            <p id="q1">Discount Value</p>
           <input placeholder="20%" id="input" style="margin-top: -5px;margin-left: 20px;text-align: center;">
        </div>
        <div >
            <button name="discard" id="cancel" >discard</button> 
            <button name="save"  id="add" >save</button>
        </div>
    </div>
 <div id="rowclose">
            <a href="Products.php" id="close"><i class="fa fa-close"></i></a>
          </div>
    </div>
   </form>
</body>
</html>