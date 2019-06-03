<?php

$con=mysqli_connect("localhost","root","") or die("database couldnt connected ");
$db=mysqli_select_db($con,"register") or die("couldnt selected database");

$bookid=$_POST['bookname'];



$query= "DELETE FROM `issue` WHERE bookid=$bookid";

$result=mysqli_query($con,$query) or die("Query failed:".mysqli_error($con));
/*
 echo ("<script>if(confirm('INSERTED SUCCESSFULLY DO YOU WANT TO ADD MORE BOOKS?')){
window.location.href='addbooks.html';
}
else
{
window.location.href='booksearch.html';
 };</script>"); */

 echo '<script type="text/javascript">';
  echo 'alert("RETURNED BOOK SUCCESSFULLY");';
 echo 'window.location.href="returnbook.html";';
 echo '</script>';

mysqli_close($con);
?>