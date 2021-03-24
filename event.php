<?php require ('eventData.php') ?>
<!DOCTYPE html>
<html lang="fr">
<?php
$titlePage = 'Evénements - Au Son Vert';
$metadescriptionPage = 'Découvrez tous nos événements et ateliers autour de la musique, animés par nos passionnées !';
require('header.php') ?>
        <section id="events">
            <h1 class="row-title">Evènements</h1>
                <?php foreach ($articles as $article): ?>
                    <h2><?= $article['date']?></h2>
                    <h3><?= $article['type']?></h3>
                    <img src="<?= $article['picture']?>">
                    <p><?= $article['contenu']?></p>
    <div id="share">
        <strong>Partager cet article sur:</strong>
        <button class="facebook">Facebook</button>
        <button class="twitter">Twitter</button>
        <button class="link">Copy Link</button>
    </div>
                <?php endforeach; ?>
        </section>
    <script src="event.js"></script>
<?php require("footer.php") ?>
</html>