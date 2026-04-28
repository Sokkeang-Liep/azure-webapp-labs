<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>Form Add New Menu</h1> 
    <form method="post" action="added_product.php" enctype= "multipart/form-data"> 
    <table border="0" width=500 cellspacing=10> 
        <tr> 
            <td>Menu name</td> 
            <td><input type="text" name="txtname"></td></tr> 
        <tr> 
            <td>Picture</td> 
            <td><input type="file" name="files"></td></tr> 
        <tr> 
            <td>Size</td> 
            <td><select name="txtsize"> 
                <option>Regular</option> 
                <option>large</option> 
                <option>small</option> 
                <option>Grand</option> 
            </select></td></tr> 
     <tr><td>Price</td> 
            <td><input type="text" name="txtprice"></td></tr> 
     <tr><td>Point</td> 
            <td><input type="text" name="txtpoint"></td></tr> 
     <tr><td colspan=2> 
<input type="submit" name="btnadd" value="add Menu"></td></tr> 
</table></table>
</body>
</html>