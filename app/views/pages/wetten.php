<?php
require APPROOT . '/views/inc/header.php';
?>


<div class="container mt-3">
    <div class="row">
        <div class="col-md-4">
            <h4>Wetten</h4>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <?php foreach ($data['wetten'] as $wet) : ?>
               <div class="col-md-3">
                <div class="card">
                        <img class="card-img-top" src="https://picsum.photos/10/?blur" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title"><?= $wet->naam ?></h6>
                            <a href=" <?= URLROOT . 'public/assets/documents/' . $wet->path ?>" class="card-link btn btn-outline-danger"><i class="fas fa-download"></i> Download</a>
                        </div>
                    </div>
               </div>
<?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</div>


<?php
require APPROOT . '/views/inc/footer.php';
?>