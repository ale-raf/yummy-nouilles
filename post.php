<?php

$commande = [];

$entrée = $_POST['entrées'] ?? '';
$plat = $_POST['plats'] ?? '';
$dessert = $_POST['desserts'] ?? '';
$boisson = $_POST['boissons'] ?? '';
$validation = $_POST['valider'];

if (isset($validation)) {
    array_push($commande, $entrée, $plat, $dessert, $boisson);
    $res;
    $link;
    foreach ($commande as $item) {
        if (empty($item)) {
            $res = "⚠️ Vous devez sélectionner une option pour chaque catégorie du menu <br/>";
            $link = '<a href="form.php">Retour</a>';
        } else {
            $res = "Votre commande a été prise en compte ✅ Voici le récapitulatif de votre commande : <br/>
            Entrée : $commande[0] <br/>
            Plat : $commande[1] <br/>
            Dessert : $commande[2] <br/>
            Boisson : $commande[3] <br/>";
            $link = '<a href="home.php">Accueil</a>';
        }
    }
    echo $res;
    echo $link;
}
