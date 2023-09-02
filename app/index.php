<!DOCTYPE html>
<html>
<head>
    <title>AvoMark</title>
</head>
<body>
    <h1>Bienvenue sur notre AvoMark</h1>

    <?php
    // Vérifier si l'utilisateur est connecté
    session_start();
    if (isset($_SESSION['user'])) {
        echo '<p>Vous êtes connecté en tant que ' . $_SESSION['user'] . '</p>';
        echo '<a href="logout.php">Déconnexion</a>';
    } else {
        echo '<p>Connectez-vous :</p>';
        echo '<form method="post" action="login.php">';
        echo '<label for="username">Nom d\'utilisateur :</label>';
        echo '<input type="text" name="username" id="username" required>';
        echo '<br>';
        echo '<label for="password">Mot de passe :</label>';
        echo '<input type="password" name="password" id="password" required>';
        echo '<br>';
        echo '<input type="submit" value="Se connecter">';
        echo '</form>';
    }
    ?>

</body>
</html>