<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reglas</title>
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
            <div class="titre_règles">
                <p>Cómo jugar</p>
            </div>

            <div class="liste_règles">
                <ul>

                    <div class="règle1">
                        <li class="règle1_bold">1. Objetivo del juego</li>
                        <li class="règle1_text">
                            <p>El objetivo es reducir los puntos de vida del oponente a cero utilizando cartas de campeones, hechizos y objetos.</p>
                            <p>Cada jugador comienza con 30 puntos de vida.</p>
                        </li>
                    </div>

                    <div class="règle2">
                        <li class="règle2_bold">2. Preparación</li>
                        <li class="règle2_text">
                            <p>Cada jugador comienza con un mazo de 40 cartas compuesto por campeones, hechizos y objetos.</p>
                            <p>Los mazos deben estar equilibrados con 20 cartas de campeones, 10 cartas de hechizos y 10 cartas de objetos.</p>
                        </li>
                    </div>

                    <div class="règle3">
                        <li class="règle3_bold">3. Tipos de cartas</li>

                        <li class="règle3a">
                            <p class="règle3a_bold">⸱ Cartas de campeones:</p>
                            <p class="règle3a_text">
                                Cada campeón tiene puntos de ataque, puntos de vida y una habilidad especial.
                            </p>
                        </li>

                        <li class="règle3b">
                            <p class="règle3b_bold">⸱ Cartas de hechizos:</p>
                            <p class="règle3b_text">
                                Estas cartas permiten lanzar hechizos que afectan a los campeones o a los puntos de vida.
                            </p>
                        </li>

                        <li class="règle3c">
                            <p class="règle3c_bold">⸱ Cartas de objetos:</p>
                            <p class="règle3c_text">
                                Estas cartas aumentan las habilidades de los campeones o les permiten curarse.
                            </p>
                        </li>
                    </div>

                    <div class="règle4">
                        <li class="règle4_bold">4. Inicio de la partida</li>
                        <li class="règle4_text">
                            <p>Los jugadores barajan sus mazos y roban 5 cartas.</p>
                            <p>Si un jugador no está satisfecho con su mano, puede cambiar hasta 3 cartas con la parte inferior de su mazo.</p>
                        </li>
                    </div>

                    <div class="règle5">
                        <li class="règle5_bold">5. Turnos de juego</li>

                        <li class="règle5a_text">
                            En cada turno, un jugador puede realizar las siguientes acciones:
                        </li>

                        <li class="règle5b_text">
                            ⸱ Jugar una carta de campeón (pagando su coste de maná).
                        </li>

                        <li class="règle5c_text">
                            ⸱ Atacar con uno o varios campeones.
                        </li>

                        <li class="règle5d_text">
                            ⸱ Lanzar hechizos o usar objetos.
                        </li>

                        <li class="règle5e_text">
                            ⸱ Robar una carta al final de su turno.
                        </li>
                    </div>

                    <div class="règle6">
                        <li class="règle6_bold">6. El maná</li>

                        <li class="règle6_text">
                            <p>Cada jugador comienza con 3 de maná.</p>
                            <p>El maná se utiliza para jugar cartas de campeones y ciertos hechizos.</p>
                            <p>El maná aumenta en 1 al comienzo de cada turno, hasta un máximo de 10 de maná.</p>
                        </li>
                    </div>

                    <div class="règle7">
                        <li class="règle7_bold">7. Fases de ataque y defensa</li>

                        <li>
                            <p class="règle7a_bold">⸱ Fase de ataque:</p>

                            <li class="règle7a_text">
                                <p>El jugador activo puede atacar con sus campeones.</p>
                                <p>El oponente puede defenderse con sus propios campeones.</p>
                            </li>
                        </li>

                        <li>
                            <p class="règle7b_bold">⸱ Fase de defensa</p>

                            <li class="règle7b_text">
                                <p>El oponente puede elegir bloquear el ataque con un campeón defensor.</p>
                                <p>El daño se calcula según los valores de ataque y defensa de los campeones.</p>
                            </li>
                        </li>
                    </div>

                    <div class="règle8">
                        <li class="règle8_bold">8. Habilidades especiales de los campeones</li>

                        <li class="règle8_text">
                            <p>Cada campeón tiene una habilidad especial que se activa pagando maná o cumpliendo una condición específica.</p>

                            <p>
                                Ejemplo: "Katarina - Lanzamiento de cuchillos":
                                inflige daño a todos los campeones enemigos en un radio de 3 casillas.
                            </p>
                        </li>
                    </div>

                    <div class="règle9">
                        <li class="règle9_bold">9. Cartas de hechizos y objetos</li>

                        <li class="règle9a_bold">⸱ Hechizos:</li>

                        <li class="règle9a_text">
                            <p>Pueden infligir daño, curar o afectar el campo de batalla.</p>
                            <p>Ejemplo: "Relámpago de Zilean": inflige daño a un campeón enemigo.</p>
                        </li>

                        <li class="règle9b_bold">⸱ Objetos:</li>

                        <li class="règle9b_text">
                            <p>Los objetos pueden equiparse a un campeón y otorgar bonificaciones temporales.</p>
                            <p>Ejemplo: "Espada de la Reina": +3 de ataque durante 3 turnos.</p>
                        </li>
                    </div>

                    <div class="règle10">
                        <li class="règle10_bold">10. Condiciones de victoria</li>

                        <li class="règle10_text">
                            <p>Un jugador gana cuando los puntos de vida de su oponente llegan a cero.</p>

                            <p>
                                Si un jugador no puede robar una carta al final de su turno,
                                pierde automáticamente.
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