<?php require ('shopData.php') ?>
<?php require ('indexData.php') ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Accueil - Au Son Vert</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link
            rel="shortcut icon"
            type="image/png"
            href="https://i.ibb.co/vL5WMrb/shortcuticon.png"
    />
</head>

<body>

 <?php require('header.php')?> 
<?php require('carroussel.php')?>

<div class="main-container">


    <div class="selection-products">
        <div><h2 class="row-title title-homepage">Les Nouveautés</h2></div>
        <div class="flex-cards">
            <?php for ( $i = 0 ; $i < 2 ; $i++ ): ?>
            <div class="card">
                <div class="card-header">
                    <img src=<?= $cards[$i]['picture']?> alt=<?=$cards[$i]['instrument']?>>
                </div>
                <div class="card-body">
                    <div class="card-title"><?= $cards[$i]['instrument'] . '<br>' . $cards[$i]['model']?></div>
                    <div class="card-price"><?= $cards[$i]['price']?></div>
                    <div class="card-button">ACHETER</div>
                </div>
            </div>
            <?php endfor; ?>


            <div class="card">
                <div class="card-header">
                    <img src=<?= $cards[3]['picture']?> alt=<?= $cards[3]['instrument']?>>
                </div>
                <div class="card-body">
                    <div class="card-title"><?= $cards[3]['instrument'] . '<br>' . $cards[3]['model']?></div>
                    <div class="card-body-price">
                        <div class="card-availability <?= $cards[3]['available'] ? 'green' : 'red'?>"><?= $cards[3]['available'] ? '✅ Disponible' : '❌ Indisponible'?></div>
                        <div class="card-price"><?= $cards[3]['price']?> /jour</div>
                    </div>
                    <div class="card-button rent-button">LOCATION</div>
                </div>
            </div>
        </div>
    </div>

    <section class="testimony">
        <div><h2 class="row-title title-homepage">Témoignages</h2></div>

        <div class="flex-cards">
            <?php foreach ($testimonies as $testimonyData): ?>
                <div class="testimonycard">
                    <div class="testimony-content">
                        <p class="card-text"><?= $testimonyData['message'] ?></p>
                        <p class="card-name"><?= $testimonyData['name'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>

<?php require("footer.php") ?>
</body>
</html>

