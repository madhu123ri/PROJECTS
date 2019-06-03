<?php

/*$con=mysqli_connect("localhost","root","") or die("database couldnt connected ");
$db=mysqli_select_db($con,"student") or die("couldnt selected database");
*/
/*include "connection.php";

$studentname=$_POST['studentname'];
$hallticketno=$_POST['hallticketno'];
$pwd=$_POST['password'];
$query="select * from stdregister where studentname='$studentname' AND hallticketno='$hallticketno' AND password='$pwd' ";
$result=mysqli_query($con,$query) or die("Query failed:".mysqli_error($con));

$row=mysqli_fetch_array($result);
$dstud=$row['studentname'];
$dhall=$row['hallticketno'];
$dpwd=$row['password'];
$_SESSION['hallticketno']=$hallticketno;

if($dstud==$studentname && $dhall==$hallticketno && $dpwd==$pwd)
{
 echo '<script type="text/javascript">';
  echo 'alert("LOGIN IS SUCCESS");';
 echo 'window.location.href="stdbooksrch.php";';
 echo '</script>';
}
else
{
 echo '<script type="text/javascript">';
 
 echo 'alert("login is failed please enter the correct details");';
 echo 'window.location.href="stdlogin.html";';
 echo '</script>';

}

mysqli_close($con);*/
?>



<?php

session_start();

include "connection.php";

$studentname=$_POST['studentname'];
$hallticketno=$_POST['hallticketno'];
$pwd=$_POST['password'];

$query="select * from stdregister where studentname='$studentname' AND hallticketno='$hallticketno' AND password='$pwd' ";
$query_execute=mysqli_query($con,$query);

$_SESSION['hallticketno']=$hallticketno;

        if($query_execute->num_rows ===0){
           /*header('Location:admin.php');*/
           echo "<script> alert('Username or Password is Wrong') </script>";
           echo "<script>location='stdlogin.html' </script>";
        }
else{ 
 
 
           header('Location:stdbooksrch.php');
         }
?>