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