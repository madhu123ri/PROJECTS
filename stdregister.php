<?php

/*$con=mysqli_connect("localhost","root","") or die("database couldnt connected ");
$db=mysqli_select_db($con,"student") or die("couldnt selected database");

$studentname=$_POST['student'];
$hallticketno=$_POST['hallticketno'];
$branch=$_POST['branch'];
$email=$_POST['email'];
$pwd=$_POST['Password'];
$cpwd=$_POST['confirmpassword'];



$query="insert into stdregister  values('$studentname','$hallticketno','$branch','$email','$pwd')";
$result=mysqli_query($con,$query) or die("Query failed:".mysqli_error($con));

 echo '<script type="text/javascript">';
  echo 'alert("REGISTRARTION IS SUCCESSFULL");';
 echo 'window.location.href="student.html";';
 echo '</script>';

 

mysqli_close($con);*/
?>


<?php
session_start();
     
include('connection.php');

$studentname=$_POST['studentname'];
$hallticketno=$_POST['hallticketno'];
$branch=$_POST['branch'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];

/*$name=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"Images/$name");*/

$check_email = mysqli_query($con, "SELECT hallticketno FROM stdregister where hallticketno = '$hallticketno' ");
if(mysqli_num_rows($check_email) > 0){
   /* echo('Email Already exists');*/
      echo "<script> alert('hallticketno already exist') </script>";
      echo "<script>location='stdregister.html' </script>"; 
}

else{
    /*if ($_SERVER["REQUEST_METHOD"] == "POST") {*/
   mysqli_query($con, "INSERT INTO stdregister(studentname, hallticketno, branch, email, mobile, password)
    VALUES('$studentname', '$hallticketno', '$branch', '$email', '$mobile', '$password')");
/*mysqli_query($con, "INSERT INTO stdregister(studentname, hallticketno, branch, email, mobile, password) 
	(SELECT IFNULL(MAX(ID),0)+1, '$studentname', '$hallticketno', '$branch', '$email', '$mobile', '$password' FROM stdregister)");*/
}

   /* echo('Record Entered Successfully');*/
   if($mysqli_query_execute->num_rows ===0){
           header('Location:stdregister.html');
        }
else{ 
 
          echo "<script> alert('Registration details added successfully') </script>";
          echo "<script>location='stdlogin.html' </script>"; 

         }
/*}*/

?>