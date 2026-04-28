<?php 
$folder="../images/"; 
$name=isset($_POST['txtname'])? $_POST['txtname']:''; 
$img=isset($_FILES['files']['name'])?$_FILES['files']['name']:''; 
$size=isset($_POST['txtsize'])? $_POST['txtsize']:''; 
$price=isset($_POST['txtprice'])? $_POST['txtprice']:''; 
$point=isset($_POST['txtpoint'])? $_POST['txtpoint']:''; 
 
include_once('../config.php'); 
move_uploaded_file($_FILES['files']['tmp_name'],$folder.$img); 
$sql="INSERT INTO `tblproduct`(`pro_id`, `pro_name`, `img`, `size`, `price`, `point`)  
VALUES(NULL,'$name','$img','$size','$price','$point')"; 
 
$retval=mysqli_query($conn,$sql); 
if(!$retval){ 
    die('could not add:'.mysqli_error($conn)); 
} 
echo"Add Menu Sucessfully/n";
mysqli_close($conn);
?>