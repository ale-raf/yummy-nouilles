<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Yummy Nouilles - <?= $title ?></title>
</head>

<body>
    <header>
        <img src="images/logo-yummy-nouilles.png" alt="logo Yummy Nouilles">
        <nav>
            <a href="home.php" class=<?= $title === "Accueil" ? "title-underline" : null ?>>Accueil</a>
            <a href="menu.php" class=<?= $title === "Menu" ? "title-underline" : null ?>>Menu</a>
            <a href="contact.php" class=<?= $title === "Contact" ? "title-underline" : null ?>>Contact</a>
            <a href="form.php" class=<?= $title === "Commander" ? "title-underline" : null ?>>Commander</a>
        </nav>
    </header>