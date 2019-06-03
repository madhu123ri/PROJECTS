<?php

$con=mysqli_connect("localhost","root","") or die("database couldnt connected ");
$db=mysqli_select_db($con,"register") or die("couldnt selected database");

$bookid=$_POST['id'];
$htno=$_POST['title'];
$stdname=$_POST['name'];
$brch=$_POST['branch'];
$issuedate  = date('Y-m-d',strtotime($_POST['issuedate']));
;
$returndate== date('Y-m-d',strtotime($_POST['returndate']));


$query="INSERT INTO `issue`(`bookid`, `studhtno`, `studname`, `branch`, `issuedate`, `returndate`) VALUES ($bookid,'$htno','$stdname','$brch',STR_TO_DATE('$issuedate', '%m/%d/%Y'),STR_TO_DATE('$returndate', '%m/%d/%Y'))";
$result=mysqli_query($con,$query) or die("Query failed:".mysqli_error($con));

 echo ("<script>if(confirm('INSERTED SUCCESSFULLY DO YOU WANT TO ADD MORE BOOKS?')){
window.location.href='placeorder.html';
}
else
{
window.location.href='stdbooksrch.html';
 };</script>");

 

mysqli_close($con);
?>