<?php
include 'config.php';//making 
$sid=$_GET['id'];
$sql= "DELETE FROM massage WHERE `id` = '$sid'";//Keep the design clean and uncluttered, so the text is the focal point.
if(mysqli_query($conn,$sql)){
    header("location:Allfaculty.php?id='deleted'");
}
?>