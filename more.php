<?php
require_once "actions/db_connect.php";
require_once "actions/file_upload.php";



if ($_GET){
  $id=$_GET["id"];
  
  $sql="SELECT * from mycrud where id=$id";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)==1){
      $row=mysqli_fetch_assoc($result);
} 

}else{
  header("location:error.php");
}
 $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <style> <?php require_once "HTML/style.css" ?> </style>
    
    <title>Read More</title>
</head>
<body>
 <?php require_once "HTML/nav.php"; ?>
<div class="container mt-4 p-5  ">


    <h1 class="title text-center bg-info mt-5 p-4 shadow border border-dark "><?php echo $row['authorName']?></h1>
            <table class="table bg-info  fw-bold border border-dark ">
              
                <tr>
                    <th>Title :</th>
                    <td><?php echo $row['Titel'] ?></td>
                </tr>
                
                <tr>
                    <th>Author :</th>
                    <td><?php echo $row['authorName']?></td>
                </tr>
                <tr>
                    <th>ISBN Code :</th>
                    <td><?php echo $row['IsbnCode'] ?></td>
                </tr>
                <tr>
                    <th>Description :</th>
                    <td><?php echo $row['description']?></td>
                </tr>
                <tr>
                    <th>Date  :</th>
                        <td><?php echo $row['publisher_date']?></td>
                </tr>
                <tr>
                    <th>Type :</th>
                    <td><?php echo $row['type'] ?></td>
                </tr>
                <tr>
                    <th>Publisher Name :</th>
                    <td><?php echo $row['publisherName'] ?></td>
                </tr>
                <tr>
                    <th>Publisher Address :</th>
                    <td><?php echo $row['address'] ?></td>
                </tr>
                <tr>
                    <th>Publisher Size:</th>
                    <td><?php echo $row['size'] ?></td>
                </tr>
                <tr>
                    <th>Status :</th>
                    <td><?php echo $row['statut'] ?></td>
                </tr>
                
            </table>
            <hr>
              </div>
            <a href="index.php" class="btn btn-outline-secondary m-3 fw-bolder">Back</a></td>
              <?php require_once "HTML/footer.php"?> 

</body>
</html>

               
                   

                    
