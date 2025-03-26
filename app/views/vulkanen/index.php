<?php require   APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">

        <div class="col-1"></div>
        <div class="col-10 text-center text-warning">        
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- begin tabel -->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Hoogte (m)</th>
                        <th>Land</th>
                        <th>Jaar Laatste Uitbarsting</th>
                        <th>Aantal slachtoffers</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['vulkanen'] as $vulkaan) : ?>
                        <tr>
                            <td><?= $vulkaan->Naam; ?></td>
                            <td><?= $vulkaan->Hoogte; ?></td>
                            <td><?= $vulkaan->Land; ?></td>
                            <td><?= $vulkaan->JaarLaatsteUitbarsting; ?></td>
                            <td><?= $vulkaan->AantalSlachtoffers; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="<?= URLROOT; ?>/homepages/index"><i class="bi bi-arrow-left"></i></a>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- eind tabel -->

<?php require   APPROOT . '/views/includes/footer.php'; ?>