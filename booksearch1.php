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
	height:41%;
	background:white;
}
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
<form action="booksearch.php" method="post">
<table border="2px" align="center" cellpadding="10">
<tr>
<th><u>BOOKSEARCH</u></th>
</tr>
<tr>
<td>BOOK ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id" placeholder="bookid" required></td>
</tr>


<tr>
<td align="center"><input type="SUBMIT" VALUE="SEARCH" ></td>
</tr>
</table> 
</form>
</div>
<div class="footer">
	<h3>Copyright@2018 LIBRARY MANAGEMENT SYSTEM | Done by: SIRIPURAM ARUN, SYED HASHIM REJA</h3>
  </div>

</form>
</body>
</html>