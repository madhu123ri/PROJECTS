<html>
<head>
<title>BOOK SEARCH</title>
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


<?php include "adminmenu.php"; ?>



<div id="b2">
<form name="frm" action="vieworder.php" method="post" >

<table border="0" align="center" cellpadding="10">
<tr>
<th><u>VIEW ORDER&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
<td>STUDENT HTNO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="htnumber"></td>&nbsp;<td><input type="SUBMIT" VALUE="VIEW ORDER" ></td>
<tr>

</table>
</div>
<div class="footer">
	<h3>Copyright@2018 LIBRARY MANAGEMENT SYSTEM | Done by: SIRIPURAM ARUN, SYED HASHIM REJA</h3>
  </div>


</body>
</html>