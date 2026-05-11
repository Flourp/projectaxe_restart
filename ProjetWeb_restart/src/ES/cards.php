<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartas</title>
    <link rel="stylesheet" href="../../assets/margin.css">
    <link rel="stylesheet" href="../../assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Rashi+Hebrew:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header_main">
        <section class="header">
            <div class="logo">
                <a href="../../src/es/index.php">
                    <img src="https://logos-world.net/wp-content/uploads/2023/02/LoL-Symbol.png" alt=""
                        style="width: 100px; height: 50px;">
                </a>
            </div>

            <div class="bouton_cartes">
                <a href="../../src/es/cards.php">
                    <p>Cartas</p>
                </a>
            </div>

            <div class="bouton_règles">
                <a href="../../src/es/rules.php">
                    <p>Cómo jugar</p>
                </a>
            </div>

            <div class="bouton_boutique">
                <a href="../../src/es/shop.php">
                    <p>Tienda</p>
                </a>
            </div>

            <div class="bouton_tournois">
                <a href="../../src/es/tournament.php">
                    <p>Torneo</p>
                </a>
            </div>

            <div class="bouton_connexion">
                <a href="../../src/es/login.php">
                    <p>Iniciar sesión</p>
                </a>
            </div>

            <section class="header2">
                <div class="language_main">
                    <ul>
                        <li>
                            <img src="../../image/language.png" alt="" style="width: 50px; height: auto;">
                            <ul>
                                <li><a href="../../src/fr/index.php">FR</a></li>
                                <li><a href="../../src/es/index.php">ES</a></li>
                                <li><a href="../../src/en/index.php">EN</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="lightdark">
                    <img class="hidden" src="../../image/lightmode.png" alt="" style="width: 100px; height: 50px;">
                    <img  src="../../image/darkmode.png" alt="" style="width: 100px; height: 50px;">
                </div>
            </section>
        </section>
    </header>
    <main>
        <section>
            <div class="titre_cartes">
                <!-- Logo Principal LOL TCG -->
                <p> Cartas </p>
                <br>
            </div>
        </section>
        <section >
 <div class="main">

        <input id="input" placeholder="Tape un champion" class="test">

        <button id="button" class="test">
            Buscar
        </button>

        <div class="card">

            <p id="name"></p>
            <br>
            <p id="health"></p>
            <br>
            <p id="armor"></p>
            <br>
            <p id="damage"></p>
            <br>

            <img id="image" class="image_cards">

        </div>

    </div>

    <script src="../../scripts/champion.js"></script>

        </section>

    </main>
    <script src="../../scripts/main.js"></script>
</body>

</html>