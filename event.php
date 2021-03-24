<?php require ('eventData.php') ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Évènements | Au Son Vert</title>
    <link href="styles.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
    <?php require ('header.php') ?>
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
</body>
</html>