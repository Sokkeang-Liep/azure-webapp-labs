<?php
include_once('../config.php');
$id=$_GET['proID'];
$sql="DELETE FROM tblproduct WHERE pro_id='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    die("Delete failed: ".mysqli_error($conn)); 
}
header("Location: index.php");
?>