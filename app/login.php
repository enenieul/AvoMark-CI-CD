<?php
// Vérifier les identifiants de connexion
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérification factice - À remplacer par une vérification réelle
    if ($username === 'utilisateur' && $password === 'motdepasse') {
        $_SESSION['user'] = $username;
        header('Location: index.php');
        exit;
    } else {
        echo 'Identifiants incorrects.';
    }
}
?>