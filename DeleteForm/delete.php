<?php
session_start();
include 'connection.php';
$id=$_GET['id'];
 
$result=mysqli_query($connection,"DELETE FROM register2 WHERE id='$id'");
if($result)
{
    $_SESSION['success']='success';
    header("Location:index.php");
}else{
    $_SESSION['success']='failed';
}
?>
