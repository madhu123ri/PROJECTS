<?php
/*$con=mysqli_connect("localhost","root","") or die("database couldnt connected ");
$db=mysqli_select_db($con,"admin") or die("couldnt selected database");*/

include "connection.php";

$bookid=$_POST['id'];
$result= mysqli_query("select * from addbook where BOOKID='$bookid'", $con);	

<html>
	<body>
		<a href="bookupdate.html">Add New Data</a><br/><br/>
	   "<table border=1><tr>";
		 "<th>BOOKID</th>";
		 "<th>TITLE</th>";
		 "<th>EDITION</th>";
		 "<th>AUTHOR_NAME</th>";
		 "<th>PRICE</th>";
		 "<th>QUANTITY</th>";
		 "<th>AVAILABLE_QUANTITY</th>";
		 "</tr>";
	  
	  <?php
      while($res = mysqli_fetch_array($result)){
	    echo "<tr>";
        echo  "<td>" .$row["BOOKID"]. "</td>";
		echo  " <td>" .$row["TITLE"]."</td>"; 
		echo  " <td>" .$row["EDITION"]."</td>"; 
		echo  "<td>" .$row["AUTHOR_NAME"]."</td>";
		echo  "<td>" .$row["PRICE"]."</td>";
		echo  "<td>" .$row["QUANTITY"]."</td>";
		echo  "<td>" .$row["AVAILABLE_QUANTITY"]."</td>";
		echo "<td><a href=\"edit.php?BOOKID=$res[id]\">Edit</a> | <a href=\"delete.php?BOOKID=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; 

		echo  "</tr>";
		}
		mysqli_free_result($result);
     
	 }
	   
   
	 mysqli_close($con);
?>
</body>
</html>
 