<?php

//  $servername="localhost";
//  $username="root";
//  $password="";
//  $dbname="dom";


$servername="mysql-rafal001558.alwaysdata.net";
$username="217038";
$password="zaq1@WSX";
$dbname="rafal001558_dom";

$conn = new mysqli($servername, $username, $password, $dbname);

$sqlGetId = "SELECT LAST_INSERT_ID()";

$sql=" INSERT INTO lib_autor (id_autor, name) values (NULL, '".$_POST['nazwisko']."') ";
mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sqlGetId);
while ($row = $result->fetch_assoc()) {
    $autorId = $row["LAST_INSERT_ID()"];
}

$sql=" INSERT INTO lib_tyt (id_tytul, tytul) values (NULL, '".$_POST['tytul']."') ";
mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sqlGetId);
while ($row = $result->fetch_assoc()) {
    $tytulId = $row["LAST_INSERT_ID()"];
}

$sql=" INSERT INTO lib_aut_tyt (id_autor_tytul, id_autor,id_tytul) values (NULL, $autorId, $tytulId)";

mysqli_query($conn, $sql);

header("Location:index.php");
?>
