<?php
require_once 'db_connect.php';
require_once  'file_upload.php';

if($_POST){  
     $id=$_POST["id"];
    $Titel=$_POST['Titel'];
    $publisherName = $_POST['publisherName'];
    $publisher_date=$_POST['publisher_date'];
    $address=$_POST['address'];
    $type=$_POST['type'];
    $statut = $_POST['statut'];
    $authorName = $_POST['authorName'];
    $size=$_POST['size'];
   $picture = file_upload($_FILES['picture']);  
   $IsbnCode=$_POST['IsbnCode'];
   $description=$_POST['description'];
    $uploadError = '';
    $picture = file_upload($_FILES['picture']);  

   if ($picture->error===0){
    ($_POST['picture']=='demo.png')?: unlink('../pictures/$_POST[picture]');  
    $sql =" UPDATE mycrud SET 'Titel'='$Titel',
    'publisherName'='$publisherName',
    'publisher_date'='$publisher_date',
    'address'='$address',
    'type'='$type',
    'statut'='$statut',
    'authorName'='$authorName',
    'size'='$size',
    'id'='$id',
    'picture'='$picture->fileName',
    'IsbnCode'='$IsbnCode',
    'description'='$description' WHERE id = {$id}";
   }else{
    $sql ="UPDATE mycrud SET'Titel'='$Titel',
    'publisherName'='$publisherName',
    'publisher_date'='$publisher_date',
    'address'='$address',
    'type'='$type',
    'statut'='$statut',
    'authorName'='$authorName',
    'size'='$size',
    'IsbnCode'='$IsbnCode',
    'description'='$description' WHERE id =$id";
   }  
   if (mysqli_query( $conn, $sql)) {
       $class = 'success';
       $message = 'The record was successfully updated';
       $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
   } else {
       $class = 'danger';
       $message = 'Error while updating record : <br>' . $conn->error;
       $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
   }
   
} else {
   header('location: ../error.php');
}
$conn->close();    
?>

<!DOCTYPE html>
<html lang= "en">
   <head>
       <meta  charset="UTF-8">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <title>Update</title>
   </head>
   <body>
   <div  class="container">
           <div class="mt-3 mb-3" >
               <h1>Update request response</h1>
           </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php' class="btn btn-success">Home</a>
            </div>
       </div >
   </body>
</html>