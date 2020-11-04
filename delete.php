<?php

$servername="mysql-rafal001558.alwaysdata.net";
$username="217038";
$password="zaq1@WSX";
$dbname="rafal001558_dom";

$conn= new mysqli($servername,$username,$password,$dbname);

$sql="DELETE FROM `lib_aut_tyt` WHERE `lib_aut_tyt`.`id_autor_tytul` = '".$_POST['ID']."'";

echo($sql);

mysqli_query($conn, $sql);

header("Location:index.php");