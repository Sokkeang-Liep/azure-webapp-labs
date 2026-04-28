<?php 
/*    */
$server="localhost"; 
$user="root"; 
$pws=""; 
$db="db_coffee"; 
$conn=mysqli_connect($server,$user,$pws); 
$sql=mysqli_select_db($conn,$db); 
if(!$sql){ 
echo"can not connect"; 
} 

?>



