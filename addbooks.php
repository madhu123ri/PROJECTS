 
<?php
session_start();
     
include('connection.php');

$bookid=$_POST['id'];
$title=$_POST['title'];
$edition=$_POST['edition'];
$authorname=$_POST['author'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$availableqty=$_POST['availableqty'];
$shelfrackno=$_POST['shelfrackno'];



$check_book = mysqli_query($con, "SELECT bookid FROM addbook where bookid = '$bookid' ");
if(mysqli_num_rows($check_book) > 0){
  
      header('Location:addbooksss.php?error=1');
}
else{
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   mysqli_query($con, "INSERT INTO addbook(bookid, title, edition, authorname, price, quantity, availableqty,shelfrackno) 
   	VALUES('$bookid', '$title', '$edition', '$authorname', '$price', '$quantity', '$availableqty','$shelfrackno')");
}

      if($mysqli_query_execute->num_rows ===0){
           header('Location:addbooksss.php?error=3');
        }
else{ 
 
                    header('Location:addbooksss.php?error=2');

         }

}
?>