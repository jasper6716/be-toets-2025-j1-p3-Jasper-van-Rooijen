<?php require   APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row mb-3">
        <div class="col-3"></div>
        <div class="col-6 text-begin text-warning">        
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="row mb-3" style="display:<?= $data['message']; ?>">
        <div class="col-3"></div>
        <div class="col-6 text-begin text-warning">        
            <div class="alert alert-success" role="alert">
                Record is gewijzigd
            </div>
        </div>
        <div class="col-3"></div>
    </div>
    
    <!-- begin tabel -->
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <form action="<?= URLROOT; ?>/horloges/update" method="post">
                <div class="mb-3">
                    <label for="merk" class="form-label">Merk</label>
                    <input value="<?= $data['horloges']->Merk; ?>" name="merk" type="text" class="form-control" id="merk" required>
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input value="<?= $data['horloges']->Model; ?>" name="model" type="text" min="0" max="10000" class="form-control" id="model" required>
                </div>
                <div class="mb-3">
                    <label for="prijs" class="form-label">Prijs</label>
                    <input value="<?= $data['horloges']->Prijs; ?>" name="prijs" type="number" class="form-control" id="prijs" required>
                </div>
                
                <input type="hidden" name="Id" value="<?= $data['horloges']->Id; ?>">
                
                <button type="submit" class="btn btn-danger">Wijzig</button>
            </form>
            
            <a href="<?= URLROOT; ?>/homepages/index"><i class="bi bi-arrow-left"></i></a>
        </div>
        <div class="col-3"></div>
    </div>
    <!-- eind tabel -->

<?php require   APPROOT . '/views/includes/footer.php'; ?>