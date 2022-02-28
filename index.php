<?php
require_once "actions/db_connect.php";
require_once "actions/file_upload.php";


$sql= "SELECT * FROM  mycrud ";
$result=mysqli_query($conn,$sql);

$layout="";
if(mysqli_num_rows($result) > 0){
while($row=mysqli_fetch_assoc($result)){
    $layout .=" <div class='card m-2 border border-2'style='width: 18rem;'>
    <div id='imgcard'>
    <img src='pictures/{$row['picture']}' class='card-img-top  w-100'height='300'></div>
    <hr>
    <div class='card-body '>
    <h3 class='card-title'>Titel:{$row['Titel']}</h3>
    <h6 class='card-title fw-bold'>Publisher Name : {$row['publisherName']}</h6>
    <h6 class='card-text fw-bold'>Author Name :{$row['authorName']}</h6>
    <h5 class='card-text'>Statut : {$row['statut']}</h5>
    <div class='d-flex '> 
    <a href='delete.php?id={$row['id']}' class='btn btn-danger m-1 '>Delete</a>
    <a href='update.php?id={$row['id']}' class='btn btn-warning m-1'>Update</a>
    <a href='more.php?id={$row['id']}' class='btn btn-info m-1'>More </a>
    </div>
    </div>
    </div>";
}
$conn->close();
}else{
$layout ="No result";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> PHP CRUD</title>
    <style> <?php require_once "HTML/style.css" ?> </style>
  
</head>
<body>
     <?php require_once "HTML/nav.php"; ?>


  <?php require_once "HTML/hero.php";?>

<div class="container">
<div class="row">
   <?php echo $layout; ?>
    </div>
</div>




<?php require_once "HTML/footer.php"?>
</body>
</html>





