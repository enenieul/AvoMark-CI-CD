<?php
// Déconnexion de l'utilisateur
session_start();
unset($_SESSION['user']);
header('Location: index.php');
exit;
?>