<?php 
require_once 'db_connect.php';

if  ($_POST) {
   $id = $_POST['id'];
   $picture = $_POST['picture'];
   ($picture =="demo.jpg")?: unlink("../pictures/$picture" );

   $sql = "DELETE FROM mycrud WHERE id = $id";
   if (mysqli_query($conn,$sql)===true) {
       $class = "success";
       $message = "Successfully Deleted  !";
   } else {
       $class = "danger";
       $message = "The entry was not deleted due to: <br>" . $conn->error;
   }
   
} else {
   header("location: ../error.php");
}
$conn->close();
?>


<!DOCTYPE html>
<html lang= "en">
   <head>
       <meta  charset="UTF-8">
       <title>Delete</title>
       <link rel="stylesheet" href="style.css">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   </head>
   <body>
       <div  class="container">
           <div class="mt-3 mb-3" >
               <h1>Delete Request Response</h1>
           </div>
            <div class="alert alert-<?=$class;?>" role="alert">
               <p><?=$message;?></p >
               <a class="btn btn-outline-success px-3 fw-bold text-dark" href ='../index.php'>Home</a>
            </div>
       </div >
   </body>
</html>