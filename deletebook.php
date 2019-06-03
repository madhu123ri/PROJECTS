<?php

echo $id=$_GET['bookid'];
 
 include "connection.php";
 
 $del=mysqli_query($con,"delete from addbook where bookid='$id' ")or die(mysqli_error());
if($del)
{
echo "<script>alert('selected row deleted')</script>";
 header('Location:bookupdate1.php?error=2');
}
/* echo "<script>location='bookupdate1.php'</script>";*/
echo "<script>alert('selected row deleted')</script>";
 header('Location:bookupdate1.php?error=1');

?>
