<?php require_once APPROOT . '/views/includes/header.php'; ?>

<!-- Voor het centreren van de container gebruiken we het boorstrap grid -->
<div class="container">
    <div class="row mt-3">

        <div class="col-2"></div>

        <div class="col-8">

            <h3><?php echo $data['title']; ?></h3>

            <a href="<?= URLROOT; ?>/smartphones/index">Overzicht smartphones</a>
            <br>
            <a href="<?= URLROOT; ?>/sneakers/index">Mooiste Sneakers</a>
            <br>
            <a href="<?= URLROOT; ?>/horloges/index">Duurste Horloges</a>
            <br>
            <a href="<?= URLROOT; ?>/zangeressen/index">Rijkste zangeressen</a>
            <br>
            <a href="<?= URLROOT; ?>/vulkanen/index">Actiefste vulkanen</a>

        </div>
        
        <div class="col-2"></div>
        
    </div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>