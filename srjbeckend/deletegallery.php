<?php
include 'config.php';
$sid=$_GET['id'];
$sql= "DELETE FROM gallery WHERE `id` = '$sid'";
if(mysqli_query($conn,$sql)){
    header("location:GalleryDetail.php");
}
?>