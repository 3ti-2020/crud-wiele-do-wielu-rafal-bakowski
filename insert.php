<?php

$servername="localhost";
$username="root";
$password="";
$dbname="dom";

$conn= new mysqli($servername,$username,$password,$dbname);
$sql="INSERT INTO `lib_autor`(`id_autor`,`name`,`tytul`) VALUES (NULL, '".$_POST['name']."', '".$_POST['tytul']."' );";
mysqli_query($conn, $sql);
header("Location:index.php");
?>
