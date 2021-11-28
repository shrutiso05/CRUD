<?php 
include "connect.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    
    $password = md5($_POST['password']);


    $sql = "insert into regform (name, email, mobile, password) values('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($con, $sql);
    if($result){
        // echo "Data inserted successfully";
        header('location:list.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>


<!Doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>User Registration Form</title>
  </head>
  <body>
    
    <div class="container" style="margin-left:40px; margin-top:50px;">
<div class="card" style="padding: 15px; margin: 40px;">
    <form method="post">

  <div class="mb-3">
    <label  class="form-label">Name </label>
    <input type="text" class="form-control" placeholder="Enter your Name" name="name" >
</div>

<div class="mb-3">
    <label  class="form-label">Email </label>
    <input type="email" class="form-control" placeholder="Enter your Email" name="email">
</div>

<div class="mb-3">
    <label  class="form-label">Mobile No </label>
    <input type="text" class="form-control" placeholder="Enter your Mobile number" name="mobile">
</div>

<div class="mb-3">
    <label  class="form-label">Password </label>
    <input type="password"  id="inputPassword6" class="form-control" placeholder="Enter your Password" name="password" aria-describedby="passwordHelpInline">
</div>
<div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Must be 8-20 characters long.
    </span>
  </div>


  <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
  <button class="btn btn-success my-5" ><a href="list.php" class="text-light" >View User </a></button>  
</div>

</form>
</div>

  </body>
</html>