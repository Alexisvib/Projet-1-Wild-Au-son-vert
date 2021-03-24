<?php
require ("shopData.php");
$newKey = intval($_GET['key']);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
</head>

<?php require ("header.php")?>

<section class="main-container shop-details-section">
    <h2><?=$cards[$newKey]['instrument']?></h2>
    <h3>Modèle : <?=$cards[$newKey]['model']?></h3>
    <img src="<?=$cards[$newKey]['picture']?>" alt="instru">
    <h4 class="shop-details-price">----- <?=$cards[$newKey]['price']?> <?=$cards[$newKey]['status'] === 'location' ? '/ jour' : ''?>-----</h4>
    <?php if ($cards[$newKey]['status'] === 'location'): ?>
        <div class="shop-details-availability <?= $cards[$newKey]['available'] ? 'green' : 'red'?>"><?= $cards[$newKey]['available'] ? '✅ Disponible' : '❌ Indisponible'?></div>
    <?php endif; ?>
    <a href="successCommand.php?key=<?=$newKey?>"><div class="card-button <?=$cards[$newKey]['status'] === 'achat' ? 'buy-button' : 'rent-button'?>">COMMANDER</div></a>
    <div class="shop-details-description">
        <h5>Réparations effectuées : </h5>
        <p><?=$cards[$newKey]['description']?></p>
    </div>
</section>

