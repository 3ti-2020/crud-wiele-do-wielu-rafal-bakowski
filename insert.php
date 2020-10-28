<?php

//  $servername="localhost";
//  $username="root";
//  $password="";
//  $dbname="dom";


$servername="sql7.freemysqlhosting.net";
$username="sql7373159";
$password="WwcDU7gMfM";
$dbname="sql7373159";

$conn= new mysqli($servername,$username,$password,$dbname);
$sql="INSERT INTO `lib_autor`(`id_autor`, `name`) VALUES (NULL,'".$_POST['name']."') ;";
mysqli_query($conn, $sql);
header("Location:index.php");
?>
