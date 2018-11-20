<?php
require APPROOT . '/views/inc/header.php';
?>


<div class="container mt-3">
    <div class="row">
        <div class="col-md-4">
            <h4><?= $data['document']->naam ?></h4>
            <hr>
        </div>
    </div>

     <div class="row">
       <div class="col">
       <img src="https://picsum.photos/400/600/?blur" class="rounded" alt="...">
        </div>

         <div class="col">
            <div class="row">
                <h4>Beschrijving</h4>

                <p><?= $data['document']->beschrijving ?></p>
            </div>
            <div class="row">
            <a href="<?= URLROOT . 'public/assets/documents/' . $data['document']->path ?>" class="btn btn-danger btn-block" role="button"><i class="far fa-file-pdf"></i> Download</a>
            </div>
        </div>
       </div>
    </div>
</div>


<?php
require APPROOT . '/views/inc/footer.php';
?>