<?php
    session_start();
    if(!isset($_SESSION['logged']))
        header('Location: log.php');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafał Bakowski - Karta</title>
    <link rel="stylesheet" href="cards.css">
</head>
<body>
<body class="container">
    

    <section class="foods">
        <div class="food">
        <img src="images/pic-1.jpg" alt="food 1" class="food__img" />

        <h5 class="food__name">Pizza Włoska</h5>
        <div class="skladniki__1">
            <p>ciasto drożdżowe</p>
        </div>
        <div class="skladniki__2">
            <p>sos pomidorowy</p>
        </div>
        <div class="skladniki__3">
            <p>ser mozarella</p>
        </div>
        <div class="skladniki__4">
            <p>salami</p>
        </div>
        <div class="price">
            <h3>Cena: 20$</h3>
        </div>
        <button class="btn">zamów teraz</button>
        
        </div>
        
        </div>    



        <div class="food">
            <img src="images/pic-2.jpg" alt="food 2" class="food__img" />

            <h5 class="food__name">Cheeseburger</h5>
            <div class="skladniki__1">
                <p>bułka przenna</p>
            </div>
            <div class="skladniki__2">
                <p>sos BBQ</p>
            </div>
            <div class="skladniki__3">
                <p>ser chedar</p>
            </div>
            <div class="skladniki__4">
                <p>wołowina</p>
            </div>

            <div class="price">
                <h3>Cena: 12$</h3>
            </div>
            <button class="btn">zamów teraz</button>
            </div>  



            <div class="food">
                <img src="images/pic-3.jpg" alt="food 3" class="food__img" />
    
                <h5 class="food__name">Frytki Belgijskie</h5>
                <div class="skladniki__1">
                    <p> ziemniaki</p>
                </div>
                <div class="skladniki__2">
                    <p>ketchup</p>
                </div>
                <div class="skladniki__3">
                    <p>sól</p>
                </div>
                <div class="skladniki__4">
                    <p>olej rzepakowy</p>
                </div>
                <div class="price">
                    <h3>Cena: 5$</h3>
                </div>
                <button class="btn">zamów teraz</button>
                </div>  

<!-- 
            <div class="food">
                <img src="images/pic-4.jpg" alt="food 4" class="food__img" />
    
                <h5 class="food__name">Fish Burger</h5>
                <div class="skladniki__1">
                    <p> dorsz</p>
                </div>
                <div class="skladniki__2">
                    <p>buła pełnoziarnista</p>
                </div>
                <div class="skladniki__3">
                    <p>sos tatarski</p>
                </div>
                <div class="skladniki__4">
                    <p>sałata</p>
                </div>
                <div class="price">
                    <h3>Cena: 8$</h3>
                </div>
                <button class="btn">zamów teraz</button>
                </div>  


            <div class="food">
                <img src="images/pic-5.jpg" alt="food 5" class="food__img" />
    
                <h5 class="food__name">Chicken Burger</h5>
                <div class="skladniki__1">
                    <p> bułka przenna</p>
                </div>
                <div class="skladniki__2">
                    <p>sos majonezowy</p>
                </div>
                <div class="skladniki__3">
                    <p>sałata</p>
                </div>
                <div class="skladniki__4">
                    <p>bekon</p>
                </div>
                <div class="price">
                    <h3>Cena: 12$</h3>
                </div>
                <button class="btn">zamów teraz</button>
                </div>  


            <div class="food">
                <img src="images/pic-6.jpg" alt="food 6" class="food__img" />
    
                <h5 class="food__name">Sałatka</h5>
                <div class="skladniki__1">
                    <p> sałata</p>
                </div>
                <div class="skladniki__2">
                    <p>ser feta</p>
                </div>
                <div class="skladniki__3">
                    <p>sos vinegre</p>
                </div>
                <div class="skladniki__4">
                    <p>marchew</p>
                </div>
                <div class="price">
                    <h3>Cena: 3$</h3>
                </div>
                <button class="btn">zamów teraz</button>
            </div> -->
            <a class="aa" href="wyloguj.php">WYLOGUJ_SIE</a>
            <a class="aa" href="https://github.com/3ti-2020/crud-wiele-do-wielu-rafal-bakowski">MÓJ_GITHUB</a>
            <a class="aa" href="../index.php">POWRÓT</a>
    </section>
    
    
<script src="cards.js"></script>
</body>
</html>