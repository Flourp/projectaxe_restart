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
    <title>Rules</title>
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
                <a href="../../src/en/index.php"><img src="https://logos-world.net/wp-content/uploads/2023/02/LoL-Symbol.png" alt=""
                        style="width: 100px; height: 50px;"></a>
            </div>
            <div class="bouton_cartes">
                <!-- Bouton Cartes Header ici -->
                <a href="../../src/en/cards.php">
                    <p>Cards</p>
                </a>
            </div>
            <div class="bouton_règles">
                <!-- Bouton Règles Header ici -->
                <a href="../../src/en/rules.php">
                    <p>How to play</p>
                </a>
            </div>
            <div class="bouton_boutique">
                <!-- Bouton Boutique Header ici -->
                <a href="../../src/en/shop.php">
                    <p>Shop</p>
                </a>
            </div>
            <div class="bouton_tournois">
                <!-- Bouton Tournois Header ici -->
                <a href="../../src/en/tournament.php">
                    <p>Tournament</p>
                </a>
            </div>
            <div class="bouton_connexion">
                <!-- Bouton Connexion Header ici -->
                <a href="../../src/en/login.php">
                    <p>Login</p>
                </a>
            </div>
            <section class="header2">
                <div class="language_main">
                    <ul>
                        <li><img src="../../image/language.png" alt="" style="width: 50px; height: auto;">
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
        </Section>
    </header>

    <main>
        <section>
            <div class="titre_règles">
                <p>How to Play</p>
            </div>

            <div class="liste_règles">
                <ul>

                    <div class="règle1">
                        <li class="règle1_bold">1. Game Objective</li>
                        <li class="règle1_text">
                            <p>The goal is to reduce your opponent's health points to zero using champion, spell, and item cards.</p>
                            <p>Each player starts with 30 health points.</p>
                        </li>
                    </div>

                    <div class="règle2">
                        <li class="règle2_bold">2. Setup</li>
                        <li class="règle2_text">
                            <p>Each player starts with a 40-card deck made up of champions, spells, and items.</p>
                            <p>Decks must be balanced, with 20 champion cards, 10 spell cards, and 10 item cards.</p>
                        </li>
                    </div>

                    <div class="règle3">
                        <li class="règle3_bold">3. Card Types</li>

                        <li class="règle3a">
                            <p class="règle3a_bold">⸱ Champion Cards:</p>
                            <p class="règle3a_text">
                                Each champion has attack points, health points, and a special ability.
                            </p>
                        </li>

                        <li class="règle3b">
                            <p class="règle3b_bold">⸱ Spell Cards:</p>
                            <p class="règle3b_text">
                                These cards allow players to cast spells that affect champions or health points.
                            </p>
                        </li>

                        <li class="règle3c">
                            <p class="règle3c_bold">⸱ Item Cards:</p>
                            <p class="règle3c_text">
                                These cards improve champion abilities or heal them.
                            </p>
                        </li>
                    </div>

                    <div class="règle4">
                        <li class="règle4_bold">4. Start of the Game</li>
                        <li class="règle4_text">
                            <p>Players shuffle their decks and draw 5 cards.</p>
                            <p>If a player is not satisfied with their hand, they may exchange up to 3 cards with the bottom of their deck.</p>
                        </li>
                    </div>

                    <div class="règle5">
                        <li class="règle5_bold">5. Turn Phases</li>

                        <li class="règle5a_text">
                            Each turn, a player can perform the following actions:
                        </li>

                        <li class="règle5b_text">
                            ⸱ Play a champion card (by paying its mana cost).
                        </li>

                        <li class="règle5c_text">
                            ⸱ Attack with one or more champions.
                        </li>

                        <li class="règle5d_text">
                            ⸱ Cast spells or use items.
                        </li>

                        <li class="règle5e_text">
                            ⸱ Draw a card at the end of their turn.
                        </li>
                    </div>

                    <div class="règle6">
                        <li class="règle6_bold">6. Mana</li>

                        <li class="règle6_text">
                            <p>Each player starts with 3 mana.</p>
                            <p>Mana is used to play champion cards and certain spells.</p>
                            <p>Mana increases by 1 at the start of each turn, up to a maximum of 10 mana.</p>
                        </li>
                    </div>

                    <div class="règle7">
                        <li class="règle7_bold">7. Attack and Defense Phases</li>

                        <li>
                            <p class="règle7a_bold">⸱ Attack Phase:</p>

                            <li class="règle7a_text">
                                <p>The active player may attack with their champions.</p>
                                <p>The opponent may defend using their own champions.</p>
                            </li>
                        </li>

                        <li>
                            <p class="règle7b_bold">⸱ Defense Phase</p>

                            <li class="règle7b_text">
                                <p>The opponent may choose to block the attack with a defending champion.</p>
                                <p>Damage is calculated based on the attack and defense values of the champions.</p>
                            </li>
                        </li>
                    </div>

                    <div class="règle8">
                        <li class="règle8_bold">8. Champion Special Abilities</li>

                        <li class="règle8_text">
                            <p>Each champion has a special ability activated by paying mana or meeting a specific condition.</p>

                            <p>
                                Example: "Katarina - Knife Throw":
                                deals damage to all enemy champions within a 3-tile radius.
                            </p>
                        </li>
                    </div>

                    <div class="règle9">
                        <li class="règle9_bold">9. Spell and Item Cards</li>

                        <li class="règle9a_bold">⸱ Spells:</li>

                        <li class="règle9a_text">
                            <p>They can deal damage, heal, or affect the battlefield.</p>
                            <p>Example: "Zilean's Lightning": deals damage to an enemy champion.</p>
                        </li>

                        <li class="règle9b_bold">⸱ Items:</li>

                        <li class="règle9b_text">
                            <p>Items can be equipped to a champion, granting temporary bonuses.</p>
                            <p>Example: "Queen's Sword": +3 attack for 3 turns.</p>
                        </li>
                    </div>

                    <div class="règle10">
                        <li class="règle10_bold">10. Victory Conditions</li>

                        <li class="règle10_text">
                            <p>A player wins when their opponent's health points reach zero.</p>

                            <p>
                                If a player is unable to draw a card at the end of their turn,
                                they automatically lose.
                            </p>
                        </li>
                    </div>

                </ul>
            </div>
        </section>
    </main>

    <script src="../../scripts/main.js"></script>

</body>

</html>