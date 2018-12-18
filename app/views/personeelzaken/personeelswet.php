<?php
require APPROOT . '/views/inc/header.php';
?>

<!-- <div class="mt-5">
 <div class="col-md-12">
            <div class="ml-5">
            <h3>Personeelswet</h3>
            <hr>


             <div class=mt-3>
             <div class="text-center">

            </div>
            </div>
            </div>
        </div>
        </div> -->

<div class="container mt-3">
    <div class="row">
        <div class="col-md-4">
            <h4>Personeelswet</h4>
            <hr>
        </div>
    </div>
    <div class="row">
       <div class="col">
       <img src="<?= URLROOT ?>/img/Personeelswet.png" class="rounded" alt="..." height="300" width="300">
        </div>
        <div class="col">
            <div class="row">
                <h4>Beschrijving</h4>

                <p>WET van 31 december 1962, houdende regelen omtrent de rechtstoestand van de landsdienaren en hun aanspraken op verloven, verlofsbezoldigingen en wachtgelden (Personeelswet)</p>
            </div>
            <div class="row">
            <a href="<?= URLROOT . 'public/assets/documents/Personeelswet.pdf'?>" class="btn btn-danger btn-block" role="button" target="_blank"><i class="far fa-file-pdf"></i> Download</a>
            </div>
        </div>
       </div>
    </div>
</div>

<?php
require APPROOT . '/views/inc/footer.php';
?>