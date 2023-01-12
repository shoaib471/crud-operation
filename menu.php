<?php
include 'connect.php';
$sql = "SELECT * FROM patient";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
    <title>Crud operation</title>
</head>
<body class='mt-5'>
 <center><h1>Patient Managment System</h1></center>
 <center><h1>View Records</h1></center> 
<div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add patient</a></button>
<table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Syptoms</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
  <?php
  if ($result) {
while ($row = $result->fetch_assoc()) {
?>
    <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['bloodgroup']; ?></td>
    <td><?php echo $row['syptoms']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td><a class="btn btn-info" href="update.php?updateid='id'<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    </tr>                       
    <?php    }
}
?>     
  </tbody>
</table>
</div>
</body>
</html>