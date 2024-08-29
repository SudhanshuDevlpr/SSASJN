<?php
include 'config.php';
$sid=$_GET['id'];
$sql= "DELETE FROM massage WHERE `id` = '$sid'";
if(mysqli_query($conn,$sql)){
    header("location:AllMassage.php");
}
?>