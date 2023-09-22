<?php
include "config.php";

if (isset($_POST['add'])){
    $name=$_POST['name'];
    $image=$_FILES['image'];
    $image_location=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
    $image_up="../images/".$image_name;
    $upload=mysqli_query($conn,"insert into categorie values (NULL, '$image_up','$name')");
    // echo $image_up;
    header("location:categories.php");

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
   <link rel="stylesheet" href="addgategories.css">
   <link rel="icon" href="living-room.png">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Poppins:wght@200;300&family=Rubik:ital,wght@0,400;1,300&family=Tajawal:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
   <form method="POST" enctype="multipart/form-data" >
    <div id="main">
        <input type="file" id="image" style="display: none;" name="image">
        <label for="image">
        <img src="../images/upload.png" ><br>
        <!-- <pre id="upload" name="upload">                                 Upload categories Image</pre> -->
       </label>
        <input name="name" id="name" placeholder="Enter Category Name">
         <button id="cancel" name="cancel">Cancel</button>
        <button id="add" name="add">Add</button>

    </div>
   </form>
</body>
</html>