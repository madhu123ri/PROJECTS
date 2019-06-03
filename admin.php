<html>
<head>
<title>ADMIN LOGIN</title>
<style>



body{
background:url("h8.jpg");
background-repeat:no-repeat;
background-size: 100%;
padding-top:50px;
margin-left:20px;

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

	#header{
	width:99.65%;
	height:34%;
	background:white;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   height:5%;
   width: 100%;
   background-color:whitesmoke;
   color: navy;
   text-align: center;
}
</style>
</head>

<body>




<img src="L1.bmp" alt="Smiley face" height="40%" width="99.65%">



<div id="header">
<img src="book.jpg" align="left"alt="Smiley face"height="235" width="220">
<img src="h12.jpg" align="right"alt="Smiley face"height="235" width="220">
<br>
       <center><?php
            if(isset($_GET['error'])==true){
                if($_GET['error']==1){
                    
                echo " <b style='color:red'>*&nbsp; Username or Password is wrong </b>";       

                }
            }
            ?> 
    </center>         
<form  action="database.php" method="post" >
<table border="2px" align="center" cellpadding="10">
<tr>
<td>USERNAME:<input type="text" name="user" placeholder="username" required></td>
</tr>
<br>
<br>
<tr>
<td>PASSWORD:<input type="password" name="pwd" placeholder="password" required></td>
</tr>
<br>
<tr>
<td align="center"><input type="submit" VALUE="LOGIN"></td>
</tr>
</table>
</form>

<div class="footer">
	<h4>Copyright@2018 LIBRARY MANAGEMENT SYSTEM | Done by: SIRIPURAM ARUN, SYED HASHIM REJA</h4>
  </div>


</div>

</body>
</html>