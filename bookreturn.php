<?php
session_start();

// Set session variables

include "connection.php";


echo $id=$_GET['id'];
$rdate=date('Y-m-d');
/*echo $status=$_GET['status'];*/

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $db->connect_error);
}



$check_email = mysqli_query($con, "SELECT * FROM order1 WHERE id = '$id' AND status='Returned'  ");
if(mysqli_num_rows($check_email) > 0){
    /*echo "<script> alert('Your already submited.') </script>";
    echo "<script>location='viewdate.php' </script>"; */
    header('Location:viewdate.php?error=1');

}

else{

/*$sql=mysqli_query($con,"select distinct bookid from order1 where id='$id' ");*/
$sql=mysqli_query($con,"select * from order1 where id='$id' ");
 while ($row=mysqli_fetch_array($sql)) { 

$bookid=$row['bookid'];
$htnumber=$row['htnumber'];
 } 
 $sql1=mysqli_query($con,"select * from addbook where bookid='$bookid' ");
 while ($row1=mysqli_fetch_array($sql1)) { 

$bookid1=$row1['bookid'];
$avqty=$row1['availableqty'];
$aqty=$avqty+1;
 }


$sql = "UPDATE order1 SET status='Returned', returndate='$rdate' WHERE id='$id' ";
mysqli_query($con,"UPDATE addbook SET availableqty='$aqty'  WHERE bookid='$bookid' ");


/* mysqli_query($db,"UPDATE carddetails SET money='$amts1' WHERE emailid='$rid' ");
 mysqli_query($db,"UPDATE carddetails SET money='$by' WHERE emailid='$rcvdid' ");*/

if ($con->query($sql) === TRUE) {
   
 header("Location: viewdate.php?error=2");

} else {
    echo "Error updating record: " . $con->error;
}

$con->close();

}


?> 



