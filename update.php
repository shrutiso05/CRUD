<?php 
include "connect.php";
$id = $_GET['updateid'];
$sql = "Select * from regform where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];




if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = " update regform set id = $id,  name = '$name', email ='$email', mobile = $mobile, password = '$password' where id=$id ";

    $result = mysqli_query($con, $sql);
    if($result){
         echo "Data updated successfully";
        header('location:list.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>User Registration Form</title>
  </head>
  <body>
    <div class="container" style="margin-left:40px; margin-top:50px;">
    <form method="post">
  <div class="mb-3">
    <label  class="form-label">Name </label>
    <input type="text" class="form-control" placeholder="Enter your Name" name="name" value="<?php echo $name; ?>">
</div>

<div class="mb-3">
    <label  class="form-label">Email </label>
    <input type="email" class="form-control" placeholder="Enter your Email" name="email" value="<?php echo $email; ?>">
</div>

<div class="mb-3">
    <label  class="form-label">Mobile No </label>
    <input type="text" class="form-control" placeholder="Enter your Mobile number" name="mobile" value="<?php echo $mobile; ?>">
</div>

<div class="mb-3">
    <label  class="form-label">Password </label>
    <input type="text" class="form-control" placeholder="Enter your Password" name="password" value="<?php echo $password; ?>">
</div>


  <button type="submit" class="btn btn-primary" name="submit" >Update</button>
 
  

</form>
</div>

  </body>
</html>