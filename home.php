<?php

$title = "Accueil";

ob_start();

?>

<section id="banner">
    <div>
        <h1 class="title-header">Yummy Nouilles</h1>
        <h2>Les nouilles les plus <span class="body-highlight">yummy</span> de tout Paris</h2>
        <a href="form.php" class="call-to-action">Click & collect</a>
    </div>
    <img src="images/logo-yummy-nouilles.png" alt="">
</section>

<section id="adresses">
    <h2 class="title-underline">Nos adresses</h2>
    <div>
        <figure>
            <img src="images/adresse-1.png" alt="">
            <figcaption>
                Restaurant 1<br />
                Adresse 1
            </figcaption>
        </figure>
        <figure>
            <img src="images/adresse-2.png" alt="">
            <figcaption>
                Restaurant 2<br />
                Adresse 2
            </figcaption>
        </figure>
        <figure>
            <img src="images/adresse-3.png" alt="">
            <figcaption>
                Restaurant 3<br />
                Adresse 3
            </figcaption>
        </figure>
    </div>
</section>

<section id="commander">
    <p>Commandez maintenant !</p>
    <a href="form.php" class="call-to-action">Click & collect</a>
</section>

<section id="savoir-faire">
    <h2 class="title-underline">Notre savoir-faire</h2>
    <p>Depuis près de 10 ans maintenant, nous partageons avec vous les meilleures recettes.
        Nos plats ont tous été conçus, et affinés au fil des années et des goûts.
        Nous vous apportons le meilleur de l’Asie de l’Est en plein coeur de Paris.
        Chaque année, nous reprenons tous nos plats pour les améliorer, les modifier et qu’ils vous plaisent toujours plus.
        Nous espérons que vous vous régalerez en dégustant nos plats.</p>
</section>

<section id="réseaux">
    <h2 class="title-underline">Retrouvez-nous sur les réseaux sociaux</h2>
    <div class="réseaux__gallery">
        <img src="images/Yummy Nouilles img 1.png" alt="">
        <img src="images/Yummy Nouilles img 2.png" alt="">
        <img src="images/Yummy Nouilles img 3.png" alt="">
        <img src="images/Yummy Nouilles img 4.png" alt="">
        <img src="images/Yummy Nouilles img 5.png" alt="">
        <img src="images/Yummy Nouilles img 6.png" alt="">
    </div>
</section>

<section id="contact">
    <h2 class="title-underline">Contactez-nous</h2>
    <p>Vous souhaitez nous poser une question, nous faire un feedback, ou tout simplement nous contacter ?<br />
        Écrivez-nous à <span class="body-highlight">yummy@noodles.fr</span> ou appelez nous au <span class="body-highlight">01 13 86 23 42</span></p>
</section>

<?php

$content = ob_get_clean();

require 'layout.php';

?>