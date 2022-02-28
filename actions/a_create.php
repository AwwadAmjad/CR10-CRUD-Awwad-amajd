<?php
require_once 'db_connect.php';
require_once 'file_upload.php';


if ($_POST) {  
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
   $mesError = '';
     $sql = "INSERT INTO `mycrud`(`Titel`,
      `publisherName`, `publisher_date`, `address`,
      `type`, `statut`, `authorName`, `size`, `picture`,
       `IsbnCode`, `description`) 
    VALUES ('$Titel','$publisherName','$publisher_date',
 '$address','$type','$statut',
   '$authorName','$size','$picture->fileName',
   '$IsbnCode','$description')" ;

   if (mysqli_query( $conn, $sql)) {
       $class = "success";
       $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <div> $Titel</div>
            <div> $publisherName</div>
            <div> $publisher_date</div>
            <div>$address</div>
            <div> $type</div>
            <div> $statut</div>
            <div> $authorName</div>
            <div> $size</div>
            <div> $picture->fileName</div>
            <div> $IsbnCode</div>
            <div> $description</div>
            </tr>
            </table>
            <hr>";
       $mesError = ($picture->error !=0)? $picture->ErrorMessage :'';
   } else {
       $class = "danger";
       $message = "Error while creating record. Try again: <br>" . $conn->error;
       $mesError = ($picture->error !=0)? $picture->ErrorMessage :'';
   }
   $conn->close();
} else {
   header("location: ../error.php");
}

?>

<!DOCTYPE html>
<html lang= "en">
   <head>
       <meta  charset="UTF-8">
       <link rel="stylesheet" href="style.css">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <title>a_create PHP</title>
   </head>
   <body>       <div  class="container">
           <div class="mt-3 mb-3 " >
               <h1 class="border border-success fw-bolder m-5 p-4 bg-light shadow-lg p-3 mb-5 bg-body rounded">Create Request Response</h1>
           </div>
            <div class="alert alert-<?=$class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($mesError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-outline-primary"  type='button'>Home</button ></a>
           </div >
       </div>
   </body>
</html>