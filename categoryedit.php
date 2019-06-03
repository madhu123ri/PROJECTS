<html>
<head>
<title>ADD BOOKS</title>
<style>
body{
background:url("h8.jpg");
background-repeat:no-repeat;
background-size: 100%;
padding-top:50px;
}
a {
text-decoration:none;
color:white;
}
​img {
    display: block;
    margin-left: auto;
    margin-right: auto;	
}
ul,li{
	list-style:none;
	padding:4px;
	float:left;
	background-color:#000000;
	border-radius:13px;
	padding-right:75px;	
}
	#header{
	width:100%;
	height:7%;
	background:silver;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height:5%;
   background-color:whitesmoke;
   color: navy;
   text-align: center;
}
#b2{
	width:100%;
	height:70%;
	background:white;
}
</style>
</head>
<body>
<img src="L1.bmp" alt="Smiley face" height="30%" width="100%">

<?php include "adminmenu.php";  ?>

<div id="b2">



<?php

include "connection.php";

 $id=$_GET['id'];

    if($con === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

    $sql = "SELECT * FROM addbook WHERE bookid='$id' ";

    if($result = mysqli_query($con, $sql)){

        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_array($result)){




echo<<<str
<form  action="addbooks1.php" method="post">
<table border="4" align="center" cellpadding="10">
<tr>
<td>BOOKID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="bookid" placeholder="bookid(Ex: A1010)" value='{$row['bookid'] }' required></td>
</tr>
<tr>
<td>TITLE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<input type="text" name="title" placeholder="title" value='{$row['title'] }' required></td>
</tr>
<tr>
<td>EDITION&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<input type="text" name="edition" placeholder="edition" value='{$row['edition'] }' required></td>
</tr>
<tr>
<td>AUTHORNAME&nbsp;&nbsp;&nbsp;
<input type="text" name="author" placeholder="authorname" value='{$row['authorname'] }' required></td>
</tr>
<tr>
<td>PRICE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="price" placeholder="price" value='{$row['price'] }' required></td>
</tr>
<tr>
<td>QUANTITY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  <input type="number" value='{$row['quantity'] }' name="quantity" placeholder="Quantity"required></td>
</tr>
<tr>
<td>AVAILABLEQTY&nbsp;&nbsp;
<input type="text" name="availableqty" placeholder="availableqty" value='{$row['availableqty'] }' required></td>
</tr>
<td>SHELFRACKNO&nbsp;&nbsp;
<input type="text" name="shelfrackno" placeholder="shelfrackno" value='{$row['shelfrackno'] }' required></td>
</tr>
<tr>
<td align="center"><input type="SUBMIT" VALUE="UPDATE" >
</td>
</tr>
str;
?>
</form>
<!-- <a href="deletebook.php?id=<?php echo  $row['bookid'] ?> "><input type="SUBMIT" VALUE="DELETE" ></a></td> -->
</tr>
</table>


<?php
 }
            echo "</table>";

            // Free result set

            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);

    }
   
    // Close connection

    mysqli_close($db);

    ?>


</div>
<div class="footer">
	<h4>Copyright@2018 LIBRARY MANAGEMENT SYSTEM | Done by: SIRIPURAM ARUN, SYED HASHIM REJA</h4>
  </div>
</body>
</html>