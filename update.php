<?php
require_once "actions/db_connect.php";

 
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $sql="SELECT * from mycrud where id={$id}";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);


$conn->close();

}else{
    header("location:error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="HTML/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <title>Update</title>
   </head > 
   <body>
       <fieldset class="container">
                
           <form action="actions/a_update.php"  method= "post" enctype= "multipart/form-data">
               <table class='table'>
                 <th>Titel </th>
                        <td> <input value="<?php echo $row["Titel"] ?>"  class ='form-control'  name="Titel"  placeholder ="Titel"></td>
                   <tr>
                       <th>Publisher Name</th>
                        <td><input  value="<?php echo $row["publisherName"] ?>" class ='form-control'  name="publisherName"  placeholder ="Publisher Name"></td>
                    
                       </tr>
                       <th> Author name</th >
                       <td><input value="<?php echo $row["authorName"]?>" class= 'form-control' name= "authorName" placeholder ="Author Name" >
                        </tr>


                   <tr>
                       <th>The Date</th>
                        <td><input  class ='form-control' type="date" value="<?php echo $row["publisher_date"]?>"  name="publisher_date"  placeholder ="Date" /></td>
                   </tr> 
                   <tr>
                       <th>The Address</th>
                        <td><input value="<?php echo $row["address"]?>"   class ='form-control'  name="address"  placeholder ="Adresse"></td>
                   </tr> 
 


                   <th>Type</th>
                   <td>
                   <select name="type">
                            <option value="<?php echo$row["type"]?>">CD</option>
                            <option value="<?php echo$row["type"]?>">DVD</option>
                            <option value="<?php echo$row["type"]?>">Book</option>
                        </select> 
                    </td>
                    
                    <tr>
                   <th>Status</th>
                        <td>
                        <select name="statut">
                            <option value="<?php echo $row["statut"]?>"> Available </option>
                            <option value="<?php echo $row["statut"]?>"> Recived </option>
                        </select>
                     </td>
                        
                       <tr>
                
                       <th>Size</th>
                        <td>
                        <select name="size">
                            <option value="big">big</option>
                            <option value="Medium">Medium</option>
                            <option value="small">small</option>
                        </select> 
                    </td>
 <tr>
                       <th>Description</th>
                        <td><input value="<?php echo $row["description"]?>"  class ='form-control' type="descriptiont"  name="description"  placeholder ="description"/></td>
                   </tr> 

                   <th>ISBN code</th>
                        <td><input value="<?php echo $row["IsbnCode"]?>" class ='form-control' type="text"  name="IsbnCode"  placeholder ="ISBN code" /></td>
                   <tr>
                       <th> The Picture</th >
                       <td><input value="<?php echo $row["picture"];?>" class= 'form-control' type="file"  name="picture"></td>
                   </tr>
                        <input type= "hidden" name="id"  value="<?php echo $row['id']; ?>" />
                       <input type= "hidden"  name="picture"  value= "<?php echo $row['picture'] ?>"/>
                   <tr>
                     
                       <td><button href="actions/a_update.php"  class="btn btn-outline-primary fw-bold" type= "submit">Insert </button></td>

                       <td><button href="index.php" class="btn btn-outline-info fw-bold" type= "submit">Back To Home </button></td>
                       
                   </tr>
               </table>
           </form>
       </fieldset>
   </body>
</html>