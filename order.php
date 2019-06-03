<?php


include('studentmenu.php');
     
include('connection.php');

$bookid=$_GET['bookid'];
$date=date('Y-m-d');
$htnumber=$htnumber;


$sql=mysqli_query($con,"select * from addbook where bookid='$bookid' ");
while ($row=mysqli_fetch_array($sql)) { 

$title=$row['title'];
$edition=$row['edition'];
$authorname=$row['authorname'];
$price=$row['price'];
$qty=$row['availableqty']-1 ;

 }

/*$date1=date_create($date);
$date2=date_create("");
$diff=date_diff($date1,$date2);
$diff->format("%R%a days");
*/
 
 mysqli_query($con, "INSERT INTO order1(bookid, htnumber, title, edition, authorname, price, currentdate, 
 	returndate, status) VALUES('$bookid', '$htnumber', '$title', '$edition', '$authorname', '$price', 
 	'$date', '$returndate', 'Issued')");

mysqli_query($con,"UPDATE addbook SET availableqty='$qty'  WHERE bookid='$bookid' ");

   if($mysqli_query_execute->num_rows ===0){
           header('Location:stdbooksrch.php?error=1');
        }
else{  
          /*echo "<script> alert('Item details added successfully') </script>";
          echo "<script>location='stdbooksrch.php' </script>"; */
           header("Location:stdbooksrch.php?error=2");
         }
         






?>


