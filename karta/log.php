<?php
session_start();

// $servername="sql7.freemysqlhosting.net";
// $username="sql7373159";
// $password="WwcDU7gMfM";
// $dbname="sql7373159";

$servername="mysql-rafal001558.alwaysdata.net";
$username="217038";
$password="zaq1@WSX";
$dbname="rafal001558_dom";



$conn= new mysqli($servername,$username,$password,$dbname);

if(isset($_POST['username'])){
    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);
    
    $sql = "SELECT * from users WHERE username='$username' AND password='$password'";

    $result = $conn->query($sql);
    if($result)
        $_SESSION['logged'] = true;
    else
        $error = true;
}

if(isset($_SESSION['logged']))
    header('Location: cards.php');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafał Bakowski gr2 - Karta</title>
    <link rel="stylesheet" href="log.css">
</head>
<body>
    <form method="post" class="logowanie">
        <label for="username">Nazwa użytkownika:</label>
        <input type="text" name="username">
        <label for="password">Hasło:</label>
        <input type="password" name="password">
        <input type="submit" value="Zaloguj ">
        <?php
        if(isset($error) && $error = true){
            echo "<span class='error'>Spróbuj ponownie sie zalogować</span>";
            unset($error);
        }
        ?>
    </form>
</body>
</html>
