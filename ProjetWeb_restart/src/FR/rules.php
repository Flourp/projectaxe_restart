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
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/margin.css">
    <link rel="stylesheet" href="../../assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Rashi+Hebrew:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header_main">
        <Section class="header">
            <div class="logo">
                <!-- Image Logo ici -->
                <a href="../../src/fr/index.php"><img src="https://logos-world.net/wp-content/uploads/2023/02/LoL-Symbol.png" alt=""
                        style="width: 100px; height: 50px;"></a>
            </div>
            <div class="bouton_cartes">
                <!-- Bouton Cartes Header ici -->
                <a href="../../src/fr/cards.php">
                    <p>Cartes</p>
                </a>
            </div>
            <div class="bouton_règles">
                <!-- Bouton Règles Header ici -->
                <a href="../../src/fr/rules.php">
                    <p>Comment Jouer</p>
                </a>
            </div>
            <div class="bouton_boutique">
                <!-- Bouton Boutique Header ici -->
                <a href="../../src/fr/shop.php">
                    <p>Boutique</p>
                </a>
            </div>
            <div class="bouton_tournois">
                <!-- Bouton Tournois Header ici -->
                <a href="../../src/fr/tournament.php">
                    <p>Tournois</p>
                </a>
            </div>
            <div class="bouton_connexion">
                <!-- Bouton Connexion Header ici -->
                <a href="../../src/fr/login.php">
                    <p>Connexion</p>
                </a>
            </div>
            <section class="header2">
                <div class="language_main">
                    <ul>
                        <li><img src="../../image/language.png" alt="" style="width: 50px; height: auto;">
                            <ul>
                                <li><a href="../../src/en/index.php">EN</a></li>
                                <li><a href="../../src/es/index.php">ES</a></li>
                                <li><a href="../../src/fr/index.php">FR</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="lightdark">
                    <img class="hidden" src="../../image/lightmode.png" alt="" style="width: 100px; height: 50px;">
                    <img  src="../../image/darkmode.png" alt="" style="width: 100px; height: 50px;">
                </div>
            </section>
        </Section>
    </header>
    <main>
        <section>
            <div class="titre_règles">
                <!-- Logo Principal LOL TCG -->
                <p> Comment Jouer </p>
            </div>
            <div class="liste_règles">
                <!-- Liste des règles du jeu -->
                <ul>
                    <div class="règle1">
                        <li class="règle1_bold">1. Objectif du jeu</li>
                        <li class="règle1_text">
                            <p>L'objectif est de réduire les points de vie de l'adversaire à zéro en
                                utilisant des cartes de champions, sorts, et objets. </p>
                            <p>Chaque joueur commence avec 30 points
                                de vie.</p>
                        </li>
                    </div>
                    <div class="règle2">
                        <li class="règle2_bold">2. Mise en place</li>
                        <li class="règle2_text">
                            <p>Chaque joueur commence avec un deck de 40 cartes, composé de champions,
                                sorts, et objets.</p>
                            <p>Les decks doivent être équilibrés, avec une proportion de 20 cartes de champions, 10
                                cartes de sorts, et 10 cartes d'objets.</p>
                        </li>
                    </div>
                    <div class="règle3">
                        <li class="règle3_bold">3. Les types de cartes</li>
                        <li class="règle3a">
                            <p class="règle3a_bold">⸱ Cartes de champions :</p>
                            <p class="règle3a_text">Chaque champion a des points d'attaque, des points de vie, et une
                                capacité spéciale.
                            </p>
                        </li>
                        <li class="règle3b">
                            <p class="règle3b_bold">⸱ Cartes de sorts :</p>
                            <p class="règle3b_text">Ces cartes permettent de lancer des sorts affectant les champions ou
                                les points de
                                vie.
                            </p>
                        </li>
                        <li class="règle3c">
                            <p class="règle3c_bold">⸱ Cartes d'objets :</p>
                            <p class="règle3c_text">Ces cartes augmentent les capacités des champions ou permettent de
                                les soigner.</p>
                        </li>
                    </div>
                    <div class="règle4">
                        <li class="règle4_bold">4. Début du jeu</li>
                        <li class="règle4_text">
                            <p>Les joueurs mélangent leur deck et tirent 5 cartes. </p>
                            <p>Si un joueur n'est
                                pas satisfait de sa main, il peut échanger jusqu'à 3 cartes avec le fond de son deck.
                            </p>
                        </li>
                    </div>
                    <div class="règle5">
                        <li class="règle5_bold">5. Tour de jeu</li>
                        <li class="règle5a_text">À chaque tour, un joueur peut effectuer les actions suivantes :</li>
                        <li class="règle5b_text">⸱ Jouer une carte champion (en payant son coût en mana).</li>
                        <li class="règle5c_text">⸱ Attaquer avec un ou plusieurs champions.</li>
                        <li class="règle5d_text">⸱ Jouer des sorts ou utiliser des objets.</li>
                        <li class="règle5e_text">⸱ Piocher une carte à la fin de son tour.</li>
                    </div>
                    <div class="règle6">
                        <li class="règle6_bold">6. Le mana</li>
                        <li class="règle6_text">
                            <p>Chaque joueur commence avec 3 mana. </p>
                            <p>Le mana est utilisé pour jouer des
                                cartes de champions et certains sorts.</p>
                            <p> Le mana augmente de 1 à chaque début de tour, jusqu'à
                                un maximum de 10 mana.</p>
                        </li>
                    </div>
                    <div class="règle7">
                        <li class="règle7_bold">7. Les phases d'attaque et de défense</li>
                        <li>
                            <p class="règle7a_bold">⸱ Phase d'attaque : </p>
                        <li class="règle7a_text">
                            <p>Le joueur actif peut attaquer avec ses champions.
                            <p>L'adversaire peut
                                défendre avec ses champions.</p>
                        </li>
                        </li>
                        <li>
                            <p class="règle7b_bold">⸱ Phase de défense </p>
                        <li class="règle7b_text">
                            <p>L'adversaire peut choisir de parer l'attaque avec un champion en
                                défense.</p>
                            <p> Les dégâts sont calculés en fonction de l'attaque et de la défense des
                                champions.</p>
                        </li>
                        </li>
                    </div>
                    <div class="règle8">
                        <li class="règle8_bold">8. Les capacités spéciales des champions</li>
                        <li class="règle8_text">
                            <p>Chaque champion a une capacité spéciale, activée en payant une quantité
                                de mana ou en remplissant une condition spécifique.</p>
                            <p>Exemple : "Katarina - Lancer de
                                couteaux" : inflige des dégâts à tous les champions ennemis dans un rayon de 3 cases.
                            </p>
                        </li>
                    </div>
                    <div class="règle9">
                        <li class="règle9_bold">9. Les cartes de sorts et objets</li>
                        <li class="règle9a_bold">⸱ Sorts :</li>
                        <li class="règle9a_text">
                            <p>Ils peuvent infliger des dégâts, soigner, ou affecter le terrain de
                                jeu.</p>
                            <p> Exemple : "Foudre de Zilean" : inflige des dégâts à un champion ennemi.</p>
                        </li>
                        <li class="règle9b_bold">⸱ Objets :</li>
                        <li class="règle9b_text">
                            <p>Les objets peuvent être équipés à un champion, leur donnant des bonus
                                temporaires.</p>
                            <p> Exemple : "Épée de la Reine" : +3 attaque pendant 3 tours.</p>
                        </li>
                    </div>
                    <div class="règle10">
                        <li class="règle10_bold">10. Conditions de victoire</li>
                        <li class="règle10_text">
                            <p>Un joueur gagne lorsque les points de vie de son adversaire atteignent
                                zéro. </p>
                            <p>Si un joueur est incapable de piocher une carte à la fin de son tour, il perd
                                automatiquement.</p>
                        </li>
                    </div>
                </ul>
            </div>
        </section>

    </main>
    <script src="../../scripts/main.js"></script>
</body>

</html>