<?php

function setClass($title, $str)
{
    return isset($title) && $title === ucfirst($str) ? "class=title-underline"  : null;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <script src="script.js" defer></script>
    <title>Yummy Nouilles - <?= $title ?></title>
</head>

<body>
    <header>
        <img src="images/logo-yummy-nouilles.png" alt="logo Yummy Nouilles">
        <nav>
            <a href="home.php" <?= setClass($title, "accueil") ?>>Accueil</a>
            <a href="menu.php" <?= setClass($title, "menu") ?>>Menu</a>
            <a href="contact.php" <?= setClass($title, "contact") ?>>Contact</a>
            <a href="form.php" <?= setClass($title, "commander") ?>>Commander</a>
        </nav>
    </header>