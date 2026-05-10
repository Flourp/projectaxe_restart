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
    <title>Tienda</title>
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
            <div class="titre_boutique">
                <!-- Logo Principal LOL TCG -->
                <p> Tienda </p>
            </div>
        </section>
        <section>
            <div class="produit_main">
                <!-- Photo Produit Main -->

                <a href="test.php"> <img class="produit1" src="../../image/produit1.png" alt=""
                        style="width: 300px; height: 400px;"> </a>
                <a href="produit2.html"> <img class="produit2" src="../../image/produit2.webp" alt=""
                        style="width: 500px; height: 400px;"></a>
                <a href="produit3.html"> <img class="produit3" src="../../image/produit3.jpeg" alt=""
                        style="width: 300px; height: 400px;"></a>
            </div>
        </section>

    </main>
    <script src="../../scripts/main.js"></script>
</body>

</html>