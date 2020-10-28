<?php

$servername="localhost";
$username="root";
$password="";
$dbname="dom";

$conn= new mysqli($servername,$username,$password,$dbname);
$sql="INSERT INTO `lib_tyt`(`id_tytul`, `tytul`) VALUES (NULL,'".$_POST['tytul']."') ;";
mysqli_query($conn, $sql);
header("Location:index.php");
?>
