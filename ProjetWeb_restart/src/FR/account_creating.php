<?php

try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=utilisateurs',
        'root',
        ''
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    exit('Erreur de connexion : ' . $e->getMessage());
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    /* Récupération des données */
    $pseudo = trim($_POST['pseudo']);
    $email = trim($_POST['email']);
    $mdp = trim($_POST['mdp']);
    $mdp2 = trim($_POST['mdp2']);

    if (
        empty($pseudo) || empty($email) || empty($mdp) || empty($mdp2)
    ) {

        echo "Veuillez remplir tous les champs.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        echo "Email invalide.";

    } elseif ($mdp !== $mdp2) {

        echo "Les mots de passe sont différents.";

    } else {

        /* Vérifie si email est déjà utilisé */
        $check = $pdo->prepare(
            "SELECT * FROM utilisateurs WHERE email = :email"
        );

        $check->execute([
            'email' => $email
        ]);

        $user = $check->fetch();

        if ($user) {

            echo "Cet email existe déjà.";

        } else {

            /* Hash du mot de passe */
            $passwordHash = password_hash(
                $mdp,
                PASSWORD_DEFAULT
            );

            /* Insertion */
            $sql = $pdo->prepare(
                "INSERT INTO utilisateurs
                (pseudo, email, password)

                VALUES
                (:pseudo, :email, :password)"
            );

            $sql->execute([
                'pseudo' => $pseudo,
                'email' => $email,
                'password' => $passwordHash
            ]);

            echo "Compte créé avec succès !";

            header("Location: login.php");
            exit;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Créer un compte</title>

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
<div class="login_menu">
    <form method="POST">
        <h2 class="titre_connexion"> Créer un compte</h2>
        <label for="pseudo"> Pseudo </label>
        <input type="text" id="pseudo" name="pseudo" placeholder="ex : Romain" required>
        <label for="email">Email </label>
        <input type="email" id="email" name="email" placeholder="ex : romain@example.com" required>
        <label for="mdp"> Mot de passe </label>
        <input type="password" id="mdp" name="mdp" placeholder="8 caractères minimum" required>
        <label for="mdp2"> Confirmer le mot de passe </label>
        <input type="password" id="mdp2" name="mdp2" placeholder="Répétez le mot de passe" required>
        <button type="submit"> Créer mon compte </button>
    </form>

</div>

</body>
</html>