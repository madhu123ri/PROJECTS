
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>

<?php

include "connection.php";

$id=$_POST['id'];

    if($con === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

    $sql = "SELECT * FROM addbook WHERE bookid='$id' ";

    if($result = mysqli_query($con, $sql)){

        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_array($result)){

?>

    <div id="b2">
<form  action="booksupdate.php" method="post">
<table border="0" align="center" cellpadding="10">
<tr>
<th><u>UPDATE BOOKS</u></th>
</tr>
<tr>
<td>BOOKID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="id" placeholder="bookid" required value="<?php echo $bokid; ?>"></td>
</tr>
<tr>
<td>TITLE&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
<input type="text" name="title" placeholder="title" required  value="<?php echo $title;?>"></td>
</tr>
<tr>
<td>EDITION&nbsp; &nbsp;  &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
<input type="text" name="edition" placeholder="edition" required  value="<?php echo $edition;?>"></td>
</tr>
<tr>
<td>AUTHORNAME
<input type="text" name="author" placeholder="authorname" required  value="<?php echo $author;?>"></td>
</tr>
<tr>
<td>PRICE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="price" placeholder="price" required  value="<?php echo $price;?>"></td>
</tr>
<tr>
<td>QUANTITY &nbsp; &nbsp;&nbsp; &nbsp; 
 <input type="text" name="quantity" placeholder="Quantity"required  value="<?php echo $quantity;?>"></td>
</tr>
<tr>
<td>AVAILABLEQTY
<input type="text" name="availableqty" placeholder="availableqty" required  value="<?php echo $availableqty;?>"></td>
</tr>


<tr>
<td align="center"><input type="SUBMIT" VALUE="UPDATE" ></td>
</tr>
</table>
</form>
</div>

<?php
}
            echo "</table>";

            // Free result set

            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);

    }
   
    // Close connection

    mysqli_close($con);

    ?>


</html>