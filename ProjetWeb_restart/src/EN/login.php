<?php
session_start();

try{
    $pdo = new PDO('mysql:host=localhost;dbname=utilisateurs', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit('Database connection error: ' . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($email) || empty($password)) {
        echo "Please fill in all fields.";
        return;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        return;
    }

$stmt = $pdo->prepare('SELECT * FROM utilisateurs WHERE email = :email');
$stmt->execute(['email' => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    // Enregistrement des informations dans la session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['pseudo'] = $user['pseudo'];
    $_SESSION['email'] = $user['email'];

    // Redirection vers une autre page
    header("Location: index.php");
    exit;
} else {
    echo "Incorrect email or password.";
}
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            <div class="titre_connexion">
                <p> Login </p>
            </div>
            <div class="login_menu">
                <form action="login.php" method="POST">
                    <label for="email" class="email_input">Email :</label>
                    <input type="email" id="email" name="email" class="email_test" required>
                    <br>
                    <label for="password" class="password_input">Password :</label>
                    <input type="password" id="password" name="password" class="password_test" required>
                    <br>
                    <div class="boutton_coller">
                    <button type="submit">Login</button>
                    <a href="../../src/fr/account_creating.php">New Account</a>
                    </div>
                </form>

        </section>
    </main>
    <script src="../../scripts/main.js"></script>
</body>

</html>