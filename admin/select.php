<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="add_product.php">Insert new Product</a>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        <?php
        include_once('../config.php');
        $sql="SELECT * FROM tblproduct order by pro_id desc";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo"<tr>";
                echo"<td>".$row['pro_id']."</td>";
                echo"<td>".$row['pro_name']."</td>";
                echo"<td><img src='../images/".$row['img']."' width='100'></td>";
                echo"<td>".$row['price']." $</td>";
                echo"<td>".$row['point']." pt</td>";
                echo"</tr>";
            }
        }
        ?>
     
    </table>
</body>
</html>