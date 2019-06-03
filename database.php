<?php

session_start();

include "connection.php";

$username=$_POST['user'];
$password=$_POST['pwd'];

$query="select username,password from test where username='$username' and password='$password' ";
$query_execute=mysqli_query($con,$query);

$_SESSION['username']=$username;

        if($query_execute->num_rows ===0){
           /*echo "<script> alert('Username or Password is Wrong') </script>";
           echo "<script>location='admin.php' </script>";*/
           header('Location:admin.php?error=1');
        }

else{ 
 
 
           header('Location:homepage.php');
         }
?>
