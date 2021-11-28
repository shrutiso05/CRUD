<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0">
        <title>User's List </title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       


    </head>


<body>
<div class=container>
    <button class="btn btn-primary my-5" ><a href="user.php" class="text-light" >Add user </a></button>  
    
    <table class="table">
  <thead>
    <tr class="table-secondary">
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>


    </tr>
  </thead>
<tbody class="table-danger">
  <?php
    

$sql = "Select * from regform";
$result = mysqli_query($con, $sql);
if($result) {
   while($row =  mysqli_fetch_assoc($result)){
       $id = $row['Id'];
       $name = $row['name'];
       $email = $row['email'];
       $mobile = $row['mobile'];
       $password = $row['password'];
       echo ' 
       <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td>
      <button class="btn btn-success"><a class="text-light"  href="update.php?updateid='.$id.'">Update</a></button>
     
      <button class="btn btn-danger"><a class="text-light"  href="delete.php?deleteid='.$id.'">Delete</a></button>
      </td>
     </tr>';
    }
}
?>



</tbody>
</table>

</div>   
</body>
</html>