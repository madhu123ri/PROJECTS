<html>
<head>
<title>Book search</title>
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


<?php
include "studentmenu.php";

?>
<div id="b2"><center>
<br>
<form name="frm" action="stdbooksrch1.php" method="post" >

<table border="0" align="center" cellpadding="10">
<tr>
<th><u>BOOK SEARCH&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
<td>BOOK NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="bookname"></td>&nbsp;<td><input type="SUBMIT" VALUE="SEARCH" ></td>
<tr>

</table>
<?php
/*$con=mysqli_connect("localhost","root","") or die("database couldnt connected ");
$db=mysqli_select_db($con,"register") or die("couldnt selected database");*/

include "connection.php";

$title=$_POST['bookname'];


$query = "select * from addbook where title='$title' ";
$result=mysqli_query($con,$query) or die("Query failed:".mysqli_error($con));


 if (mysqli_num_rows($result) > 0) {
    // output data of each row
		ECHO "<TABLE BORDER='1'>";
		echo "<tr>";
		echo "<th>BOOKID</th>";
		echo "<th>TITLE</TH>";
		echo "<th>EDITION</TH>";
		echo "<th>AUTHORNAME</th>";
		echo "<th>PRICE</th>";
		echo "<th>A_BOOKS</th>";
		echo "<th>ORDER</th>";

		echo "</tr>";
		    while($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
echo "<td>" . $row['bookid']. "</td>";
echo "<td>" .$row['title']. "</td>";
echo "<td>" .$row['edition']. "</td>";
echo "<td>" .$row['authorname']. "</td>";
echo "<td>" .$row['price']. "</td>";
echo "<td>" .$row['availableqty']. "</td>";
?>

<td>
    <a href="order.php?bookid=<?php echo  $row['bookid'] ?>" ><button type="button" name="submit" >Order</button></a>
</td>

<?php

echo "<tr>";
			}
			echo "</table>";
			mysqli_free_result($result);

     //   echo "id: " . $row["bookid"]. " - studenthtno: " . $row["studhtno"]. "studentname " . $row["studname"]. "Branch " . $row["branch"]. "<br>";
  
 
}
else {
	echo '<script type="text/javascript">';
  echo 'alert("NO RECORDS ARE FOUND");';
  ECHO 'window.location.href="booksearch.html";';

 echo '</script>';
}

mysqli_close($con);
?>
 
</div>
<div class="footer">
	<h3>Copyright@2018 LIBRARY MANAGEMENT SYSTEM | Done by: SIRIPURAM ARUN, SYED HASHIM REJA</h3>
  </div>

</form>
</body>
</html>