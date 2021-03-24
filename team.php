<?php require ('teamData.php') ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>L'équipe & le magasin | Au Son Vert</title>
    <link href="styles.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
<?php require ('header.php') ?>
<section id="team">
    <h1 class="row-title">L'équipe</h1>
    <div class="cards">
    <?php foreach ($teams as $team): ?>
        <div class="card-team">
            <img src="<?= $team['picture']?>" alt="photo de l'équipe">
            <div class="card-body">
                <h2 class="card-title"><?= $team['firstname']?></h2>
                <h3 class="card-subtitle"><?= $team['specialty']?></h3>
                <blockquote><p><?= $team['presentation']?></p></blockquote>
            </div>
        </div>
<?php endforeach; ?>
    </div>
</section>
<section id="inside-shop">
    <h2 class="row-title">Le magasin</h2>
<?php require('galerie.php') ?>
</section>
</body>
</html>
