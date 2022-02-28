<?php 
require_once 'actions/db_connect.php';


   if (isset($_GET["id"])){
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
<html lang= "en">
   <head>
       <meta  charset="UTF-8">
       <meta name="viewport"  content="width=device-width, initial-scale=1.0">
       <title>Delete </title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <link rel="stylesheet" href="HTML/style.css">

       
   </head>
   <body>
       <div class="container mt-5">
       <fieldset>
           <legend class='h2 m-3'> Delete request <img class='img-thumbnail rounded-circle'  src='pictures/<?php echo $row["picture"]; ?>' alt="<?php echo $row["id"]; ?>"></legend >
           <h5>You have selected the row below: </h5>
           <table class="table w-75 mt-3" >
               <tr>
                    <td><?php echo $row["id"];?></td>
                </tr>
           </table>

           <h3  class="mb-4">Do you really want to delete this product?</h3>
           <form action ="actions/a_delete.php"  method="post">
               <input type="hidden"  name="id" value ="<?php echo $row["id"] ?>" />
               <input type="hidden"  name="picture"  value="<?php echo $row["picture"]; ?>"/>
               <button class="btn btn-danger m-2"> Yes, delete it! </button>
                <a class="btn btn-warning m-2" href="index.php"> No, go back!</a>
           </form>
       </fieldset>
       </div>
   </body>
</html>