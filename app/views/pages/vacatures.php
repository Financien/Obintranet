<?php
require APPROOT . '/views/inc/header.php';
?>


<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h4>Vacatures</h4>
            <hr>
        </div>
    </div>

    <div class="row">

        <div class="row">
        <?php foreach ($data['vacatures'] as $vacature) : ?>
            <div class="col-md-3">
                <div class="card mt-3">
                    <div class="card-body">
                        <h6 class="card-title">
                            <?= $vacature->naam; ?>
                        </h6>
                        <a href=" <?= URLROOT . 'public/assets/documents/' . $vacature->path ?>" class="card-link btn btn-outline-danger"><i class="fas fa-download"></i> Download</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>


    </div>
</div>
</div>


<?php
require APPROOT . '/views/inc/footer.php';
?>