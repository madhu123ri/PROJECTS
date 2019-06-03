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
<div id="b2">
<form  action="addbooks.php" method="post">
<table border="4" align="center" cellpadding="10">
	<br><center><?php
            if(isset($_GET['error'])==true){
                if($_GET['error']==1){
                    
                echo " <b style='color:red'>*&nbsp; Book details already exist. </b>";       

                }
                elseif($_GET['error']==2){
                    
                echo " <b style='color:#ff9900'>*&nbsp; Your details added successfully. </b>";       

                }
                elseif($_GET['error']==3){
                    
                echo " <b style='color:#ff9900'>*&nbsp; Your details added not successfully. </b>";       

                }
            }
            ?>
        </center>
        <br>
<tr>
<td>BOOKID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="id" placeholder="bookid(Ex: A1010)" required></td>
</tr>
<tr>
<td>TITLE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<input type="text" name="title" placeholder="title" required></td>
</tr>
<tr>
<td>EDITION&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<input type="text" name="edition" placeholder="edition" required></td>
</tr>
<tr>
<td>AUTHORNAME&nbsp;&nbsp;&nbsp;
<input type="text" name="author" placeholder="authorname" required></td>
</tr>
<tr>
<td>PRICE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="price" placeholder="price" required></td>
</tr>
<tr>
<td>QUANTITY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  <input type="number" name="quantity" placeholder="Quantity"required></td>
</tr>
<tr>
<td>AVAILABLEQTY&nbsp;&nbsp;
<input type="text" name="availableqty" placeholder="availableqty" required></td>
</tr>
<td>SHELF-RACKNO&nbsp;&nbsp;
<input type="text" name="shelfrackno" placeholder="shelfrackno" required></td>
</tr>
<tr>
<td align="center"><input type="SUBMIT" VALUE="INSERT" ></td>
</tr>
</table>
</form>
</div>
<div class="footer">
	<h4>Copyright@2018 LIBRARY MANAGEMENT SYSTEM | Done by: SIRIPURAM ARUN, SYED HASHIM REJA</h4>
  </div>
</body>
</html>