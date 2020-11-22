<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafal_Bakowski gr2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
    <div class="navlewo">
<h2>Wykonawca :</h2>
<p class="podpis">Rafał Bakowski grupa:  2</p>
<a href="karta/cards.php"> <img src="https://sklep.orimed.pl/img/cms/karty.png"
width="150px" height="71px"></a> link do kart w obrazku wyzej 
</div>
<div class="navprawo">
<button class="zmiana_koloru" type="button" >Zmiana koloru diva</button>
</div>
    </nav>
<left-side>

<h3>DODAJ KSIĄŻKĘ:</h3>
<form class="form" action="insert.php" method="POST" autocomplete="off">
    
    <input class="placeholder" type="text" name="nazwisko" placeholder="nazwisko"></br>
    
    <input class="placeholder" type="text" name="tytul" placeholder="tytul"></br>

    

    <input class="button" type="submit" value="Dodaj">


    </form>
    <h3>WYPOŻYCZ KSIĄŻKĘ:</h3>
    <form class="form" action="insert_wyp.php" method="POST" autocomplete="off">
    <input class="placeholder" type="text" name="tytul" placeholder="tytul"></br>
    
    <input class="placeholder" type="text" name="user" placeholder="user"></br>

    <input class="button" type="submit" value="Wypożycz">
    </form>

</left-side>
<right-side>


<?php

//  $servername="localhost";
//  $username="root";
//  $password="";
// $dbname="dom";

$servername="mysql-rafal001558.alwaysdata.net";
$username="217038";
$password="zaq1@WSX";
$dbname="rafal001558_dom";



$conn= new mysqli($servername,$username,$password,$dbname);
$result=$conn->query("SELECT id_autor_tytul, name, tytul FROM lib_tyt, lib_aut_tyt, lib_autor WHERE lib_autor.id_autor=lib_aut_tyt.id_autor AND lib_tyt.id_tytul=lib_aut_tyt.id_tytul");

    

    echo("<table class='table'>");
    echo("<tr>
    <th>Id_autor_tytul</th>
    <th>Nazwisko</th>
    <th>Tytul</th>
    <th>Usuń</th>
</tr>");

     while($wiersz=$result->fetch_assoc()){
       echo("<tr>");
       echo("<td>".$wiersz['id_autor_tytul']."</td>");
       echo("<td>".$wiersz['name']."</td>");
       echo("<td>".$wiersz['tytul']."</td>");
       echo("<td class='td'>  <form class='form' action='delete.php' method='POST'>
       <input class='text' type='hidden'  name='ID' value='$wiersz[id_autor_tytul]' placeholder='ID'></br>
    <input class='button_del' type='submit' value='Usun'> </td>");
       echo("</tr>");
     };
    echo("</table>");
   
  
    

echo("<br/><br/>");


    $result=$conn->query("SELECT lib_tyt.tytul, users.username, lib_wyp.data_wyp, lib_wyp.data_zwrot FROM lib_tyt, users, lib_wyp WHERE lib_tyt.id_tytul=lib_wyp.id_book AND users.id_user=lib_wyp.id_user");

    

    echo("<table class='table'>");
    echo("<tr>
    <th>Tytul</th>
    <th>User</th>
    <th>data_wyp</th>
    <th>data_zwrot</th>
</tr>");

     while($wiersz=$result->fetch_assoc()){
       echo("<tr>");
       echo("<td>".$wiersz['tytul']."</td>");
       echo("<td>".$wiersz['username']."</td>");
       echo("<td>".$wiersz['data_wyp']."</td>");
       echo("<td>".$wiersz['data_zwrot']."</td>");
       
       echo("</tr>");
     };
    echo("</table>");

     ?>
 </right-side>
    
</body>
<script src="main.js"></script>
</html>
