<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="HTML/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <title>My PHP </title>
   </head>
   <body>
       <?php
       require_once "HTML/nav.php";?>
       <div class="container">
       <fieldset>
           <legend class='h1 mt-2'> Add a  new one</legend>

           <form action="actions/a_create.php"  method= "post" enctype= "multipart/form-data">
               <table  class='table'>
               <th>Titel</th>
                        <td><input  class ='form-control'   name="Titel"  placeholder ="Titel" /></td>
                   <tr>
                       <th>Publisher Name</th>
                        <td> <input class ='form-control'   name="publisherName"  placeholder ="Publisher Name"/></td>
        <tr>
                   <tr>
                       <th>The Date</th>
                        <td><input  class ='form-control' Type="date"  name="publisher_date"/></td>
                   </tr>

                   <tr>
                       <th>The Adress</th>
                        <td><input  class ='form-control'   name="address"  placeholder =" The Adress" /></td>
                   </tr> 


                   <th>Type</th>
                   <td>
                   <select name="type">
                            <option value="CD">CD</option>
                            <option value="DVD">DVD</option>
                            <option value="book">Book</option>
                        </select> 
                    </td>
                    </td>
</td>
                   </tr> 
                   
                   <th>Statut</th>
                        <td>
                        <select name="statut">
                            <option value="available">Available</option>
                            <option value="recived">Recived</option>
                        </select> </td> 
                   <tr>
                       <th> Author name</th >
                       <td><input class= 'form-control'   name= " authorName" placeholder ="Author Name" step="any" >
                    
                </tr>

                 
                   <th>Size</th>
                        <td>
                        <select name="size">
                            <option value="big">BIG</option>
                            <option value="Medium">MEDIUM</option>
                            <option value="small">SMALL</option>
                        </select> 
                    </td>


                    <tr>
                       <th> The Picture</th >
                       <td><input class= 'form-control'  type="file"  name="picture"></td>
                   </tr>

                    <tr>
                       <th>Description</th>
                      <p>  <td><input  class ='form-control'   name="description"  placeholder ="Description" />
                    
                    
                    </td></p>
                   </tr> 
                    <tr>
                       <th>ISBN code</th>
                        <td><input  class ='form-control'  name="IsbnCode"  placeholder ="ISBN code" /></td>
                   </tr> 

                   
                   
                   <tr>
                       <td><button class ='btn btn-success' type= "submit">Insert </button></td>
                       
                   </tr>
               </table>
           </form>
       </fieldset>
       </div>
   </body>
</html>
