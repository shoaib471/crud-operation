<?php 

include "connect.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `patient` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        header('Location:menu.php');
    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>