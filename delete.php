<?php

$servername="sql7.freemysqlhosting.net";
$username="sql7373159";
$password="WwcDU7gMfM";
$dbname="sql7373159";

$conn= new mysqli($servername,$username,$password,$dbname);

$sql="DELETE FROM `lib_aut_tyt` WHERE `lib_aut_tyt`.`id_autor_tytul` = '".$_POST['ID']."'";

echo($sql);

mysqli_query($conn, $sql);

// header("Location:index.php");