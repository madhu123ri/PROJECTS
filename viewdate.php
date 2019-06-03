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
}</style>
</head>

<body>


<img src="L1.bmp" alt="Smiley face" height="30%" width="100%">
<?php
include "studentmenu.php";
?>
<div id="b2"><center>
<br>
<center><?php
            if(isset($_GET['error'])==true){
                if($_GET['error']==1){
                    
                echo " <b style='color:red'>*&nbsp; Your already submited. </b>";       

                }
                elseif($_GET['error']==2){
                    
                echo " <b style='color:#ff9900'>*&nbsp; Your taken book submitted now. </b>";       

                }
              
            }
            ?>
        </center>
        <br>
<?php
/*$con=mysqli_connect("localhost","root","") or die("database couldnt connected ");
$db=mysqli_select_db($con,"register") or die("couldnt selected database");*/

include "connection.php";

$bookid=$_POST['id'];


$query = "select * from order1 where htnumber='$htnumber' ";
$result=mysqli_query($con,$query) or die("Query failed:".mysqli_error($con));


 if (mysqli_num_rows($result) > 0) {
    // output data of each row
		ECHO "<TABLE BORDER='1'>";
		echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>BOOKID</th>";
		echo "<th>TITLE</TH>";
		echo "<th>EDITION</TH>";
		echo "<th>AUTHORNAME</th>";
		echo "<th>PRICE</th>";
		echo "<th>DATE</th>";
		echo "<th>R_DATE</th>";
		echo "<th>DAYS</th>";
		echo "<th>Status</th>";
		echo "<th>Return</th>";
		echo "</tr>";
		    while($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";


$date1=date_create($row['currentdate' ]);
$date2=date_create("");
$diff=date_diff($date1,$date2);
$diff->format("%R%a days");


echo "<td>" . $row['id']. "</td>";
echo "<td>" . $row['bookid']. "</td>";
echo "<td>" .$row['title']. "</td>";
echo "<td>" .$row['edition']. "</td>";
echo "<td>" .$row['authorname']. "</td>";
echo "<td>" .$row['price']. "</td>";
echo "<td>" .$row['currentdate']. "</td>";
echo "<td>" .$row['returndate']. "</td>";
echo "<td>" . $diff->format("%R%a days") . "</td>"; 
echo "<td>" .$row['status']. "</td>";


?>


<td>
    <a href="bookreturn.php?id=<?php echo  $row['id'] ?>" ><button type="button" name="submit" >Return</button></a>
</td>




<?php



echo "<tr>";
			}
			echo "</table>";
			mysqli_free_result($result);

     //   echo "id: " . $row["bookid"]. " - studenthtno: " . $row["studhtno"]. "studentname " . $row["studname"]. "Branch " . $row["branch"]. "<br>";
  
 
}
else {
	
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