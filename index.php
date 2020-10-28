<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafał_Bakowski gr2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<left-side>


<form action="insert.php" method="POST">
name:
<input type="text" name="name" ><br/>
<input type="submit" value="dodaj">
</form>

<br/><br><br/>
<form action="insert_tytul.php" method="POST">
tytul:
<input type="text" name="tytul" ><br/>
<input type="submit" value="dodaj">
</form>

</left-side>
<right-side>
<?php

//  $servername="localhost";
//  $username="root";
//  $password="";
// $dbname="dom";

$servername="sql7.freemysqlhosting.net";
$username="sql7373159";
$password="WwcDU7gMfM";
$dbname="sql7373159";



$conn= new mysqli($servername,$username,$password,$dbname);
$result=$conn->query("SELECT id_autor_tytul, name, tytul FROM lib_tyt, lib_aut_tyt, lib_autor WHERE lib_autor.id_autor=lib_aut_tyt.id_autor AND lib_tyt.id_tytul=lib_aut_tyt.id_tytul");

    

    echo("<table class='table'>");
    echo("<tr>
    <th>id_autor_tytul</th>
    <th>name</th>
    <th>tytul</th>
</tr>");

     while($wiersz=$result->fetch_assoc()){
       echo("<tr>");
       echo("<td>".$wiersz['id_autor_tytul']."</td>");
       echo("<td>".$wiersz['name']."</td>");
       echo("<td>".$wiersz['tytul']."</td>");
       echo("</tr>");
     };
    echo("</table>");
?>
    </right-side>
</body>
<script src="main.js"></script>
</html>