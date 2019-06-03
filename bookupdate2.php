<html>
<head>
<title>Book update</title>
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

<div id="header">
<ul>
<li>  <a href="homepage.php">HOME &nbsp;&nbsp;</a></li>
<li>  <a href="addbooksss.php">ADD BOOKS &nbsp;&nbsp;&nbsp;&nbsp;</a></li>
 <li> <a href="booksearch1.php"> BOOKS SEARCH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
 <li> <a href="bookupdate1.php">BOOKS UPDATE &nbsp;&nbsp;&nbsp;&nbsp;</a></li>
 <li> <a href="vieworder1.php">VIEW ORDER &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</a></li>
 <li> <a href="logout.php">LOGOUT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
 <li><a><strong>Welcome: </strong><strong style="color:red"><?php session_start(); echo $uname=$_SESSION['username']; ?></strong></a></li>
</ul>
</div>
<div id="b2"><center>
<br>
<form action="bookupdate1.php" method="post">
<table border="2px" align="center" cellpadding="5">
<tr>
<th><u>BOOKUPDATE</u></th>
</tr>
<tr>
<td>BOOK ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id" placeholder="bookid" required></td>
</tr>


<tr>
<td align="center"><input type="SUBMIT" VALUE="SEARCH" ></td>
</tr>
<?php
/*
$con=mysqli_connect("localhost","root","") or die("database cou<div id="b2"><center>
<br>
<center><?php
            if(isset($_GET['error'])==true){
                if($_GET['error']==1){   
                echo " <b style='color:red'>*&nbsp; Book id details deleted successfully. </b>";       
                }
           elseif($_GET['error']==2){  
                echo " <b style='color:#ff9900'>*&nbsp; Book id details deleted not successfully. </b>";       
                }
           elseif($_GET['error']==3){
                echo " <b style='color:#ff9900'>*&nbsp; Book id details updated successfully. </b>";       
                } 
           elseif($_GET['error']==4){
                echo " <b style='color:#ff9900'>*&nbsp; Book id details updated not successfully. </b>";       
                }   
            }
            ?>
        </center><br>ldnt connected ");
$db=mysqli_select_db($con,"register") or die("couldnt selected database");
*/
include "connection.php";

$bookid=$_POST['id'];


$query = "select * from `addbook` where  bookid='$bookid'";
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
        echo "<th>QUANTITY</th>";
        echo "<th>AVAILABLEQTY</th>";
		echo "<th>SHELFRACKNO</th>";
		echo "<th>UPDATE</th>";
		echo "<th>DELETE</th>";
		echo "</tr>";
		    while($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
echo "<td>" . $row['bookid']. "</td>";
echo "<td>" .$row['title']. "</td>";
echo "<td>" .$row['edition']. "</td>";
echo "<td>" .$row['authorname']. "</td>";
echo "<td>" .$row['price']. "</td>";
echo "<td>" .$row['quantity']. "</td>";
echo "<td>" .$row['availableqty']. "</td>";
echo "<td>" .$row['shelfrackno']. "</td>";
?>


<td>
    <a href="categoryedit.php?id=<?php echo  $row['bookid'] ?>" ><button type="button" name="submit" >Update</button></a>
</td>
<td>
    <a href="deletebook.php?bookid=<?php echo  $row['bookid'] ?>" ><button type="button" name="submit" >Delete</button></a>
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