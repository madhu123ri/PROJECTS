<?php
session_start();

include "connection.php";

$bookid=$_POST['bookid'];

$title=$_POST['title'];
$edition=$_POST['edition'];
$authorname=$_POST['author'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$availableqty=$_POST['availableqty'];
$shelfrackno=$_POST['shelfrackno'];



if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "UPDATE addbook SET bookid='$bookid', title='$title', edition='$edition', authorname='$authorname', price='$price', quantity='$quantity', availableqty='$availableqty',shelfrackno='$shelfrackno'  WHERE bookid='$bookid' ";

if ($con->query($sql) === TRUE) {
    header('Location:bookupdate1.php?error=3');

} else {
    header('Location:bookupdate1.php?error=4') . $con->error;
}

$con->close();


?> 


