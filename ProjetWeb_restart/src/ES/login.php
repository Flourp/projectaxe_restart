<?php
session_start();

try{
    $pdo = new PDO('mysql:host=localhost;dbname=utilisateurs', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit('Error de conexión a la base de datos: ' . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($email) || empty($password)) {
        echo "Por favor, completa todos los campos.";
        return;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Dirección de correo electrónico inválida.";
        return;
    }

$stmt = $pdo->prepare('SELECT * FROM utilisateurs WHERE email = :email');
$stmt->execute(['email' => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    // Guardar información en la sesión
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['pseudo'] = $user['pseudo'];
    $_SESSION['email'] = $user['email'];

    // Redirección a otra página
    header("Location: index.php");
    exit;
} else {
    echo "Correo electrónico o contraseña incorrectos.";
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
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
            <div class="titre_connexion">
                <p> Iniciar sesión</p>
            </div>
            <div class="login_menu">
                <form action="login.php" method="POST">
                    <label for="email" class="email_input">Correo electrónico</label>
                    <input type="email" id="email" name="email" class="email_test" required>
                    <br>
                    <label for="password" class="password_input">Contraseña :</label>
                    <input type="password" id="password" name="password" class="password_test" required>
                    <br>
                    <div class="boutton_coller">
                    <button type="submit">Acceso</button>
                    <a href="../../src/fr/account_creating.php">Nueva cuenta</a>
                    </div>
                </form>
        </section>
    </main>
    <script src="../../scripts/main.js"></script>
</body>

</html>