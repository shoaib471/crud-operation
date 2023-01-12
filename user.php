<?php 
include "connect.php";
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['bloodgroup'];
    $password = $_POST['syptoms'];
    $number = $_POST['age'];
    $sql = "INSERT INTO `patient`(`name`, `bloodgroup`,  `syptoms`, `age`) VALUES ('$name','$email','$password','$number')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
      echo "New record created successfully.";
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 
    $conn->close(); 
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud operation</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
 </head>
  <body>
    <center><h1>Insert Data</h1></center>
    <div class="container my-5">
        <form method="post">
  <div class="mb-3">
    <label >Name</label>
    <input type="text " class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
  </div>
   <div class="mb-3">
    <label >Blood group</label>
    <input type="text" class="form-control" placeholder="Enter your Email address" name="bloodgroup"autocomplete="off">
  </div>
   <div class="mb-3">
    <label >syptoms</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="syptoms" autocomplete="off">
  </div>
 <div class="mb-3">
    <label >Age</label>
    <input type="text" class="form-control" placeholder="Enter your Phone Number" name="age" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <button class="btn btn-primary "><a href="menu.php" class="text-light">Go to the Menu</a></button>
</form>
    </div>
  </body>
</html>