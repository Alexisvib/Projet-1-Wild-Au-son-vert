<?php require('shopData.php') ?>
<!DOCTYPE html>
<html lang="fr">

<?php
$titlePage = 'Boutique - Au Son Vert';
$metadescriptionPage = 'La boutique Au Son Vert propose de nombreux instruments de musiques : à vent, cuivre, à corde, à percusion et le triangle.';
require('header.php')
?>

<div class="main-container">
    <div class="shop-header">
        <h2 class="row-title">BOUTIQUE</h2>
        <div class="flex-buttons">
            <a href="#buy-section" class="button">ACHETER</a>
            <a href="#rent-section" class="button" id="rent">LOUER</a>
            <a href="#sell-section" class="button" id="sell">VENDRE</a>
        </div>
    </div>

    <section class="shop-section">
        <h2 id="buy-section" class="row-title">ACHAT</h2>
        <div class="flex-cards">
            <?php foreach ($cards as $cardData): ?>
                <?php if ($cardData['status'] === 'achat'): ?>
                    <div class="card">
                        <div class="card-header">
                            <img src=<?= $cardData['picture'] ?> alt=<?= $cardData['instrument'] ?>>
                        </div>
                        <div class="card-body">
                            <div class="card-title"><?= $cardData['instrument'] . '<br>' . $cardData['model'] ?></div>
                            <div class="card-price"><?= $cardData['price'] ?></div>
                            <div class="card-button">ACHETER</div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="shop-section">
        <h2 id="rent-section" class="row-title">LOCATION</h2>
        <div class="flex-cards">
            <?php foreach ($cards as $cardData): ?>
                <?php if ($cardData['status'] === 'location'): ?>
                    <div class="card">
                        <div class="card-header">
                            <img src=<?= $cardData['picture'] ?> alt=<?= $cardData['instrument'] ?>>
                        </div>
                        <div class="card-body">
                            <div class="card-title"><?= $cardData['instrument'] . '<br>' . $cardData['model'] ?></div>
                            <div class="card-body-price">
                                <div class="card-availability <?= $cardData['available'] ? 'green' : 'red' ?>"><?= $cardData['available'] ? '✅ Disponible' : '❌ Indisponible' ?></div>
                                <div class="card-price"><?= $cardData['price'] ?> /jour</div>
                            </div>
                            <div class="card-button rent-button">LOCATION</div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>
</div>


<?php require("footer.php") ?>


</html>
