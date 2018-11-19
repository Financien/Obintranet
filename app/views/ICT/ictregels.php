<?php
require APPROOT . '/views/inc/header.php';
?>

<div class="container">
  <div class="row mt-3">
    <div class="col-md-4">
      <h4>ICT Regels</h4>
      <hr>
    </div>
  </div>
  <div class="container">
    <div class="accordion" id="Ictaccordion">
    <?php foreach ($data['regels'] as $ictRegel) : ?>
      <div class="card mt-3">
        <div class="card-header" id="heading<?= $ictRegel->id ?>">
          <h5 class="mb-0">
            <button class="btn btn-link text-primary font-weight-bold  " type="button" data-toggle="collapse" data-target="#collapse<?= $ictRegel->id ?>" aria-expanded="true"
              aria-controls="collapse<?= $ictRegel->id ?>">
              <?= $ictRegel->naam ?>
              <span><i class="fas fa-chevron-down"></i></span>
            </button>
          </h5>
        </div>

        <div id="collapse<?= $ictRegel->id ?>" class="collapse " aria-labelledby="heading<?= $ictRegel->id ?>" data-parent="#Ictaccordion">
          <div class="card-body">
            <?= $ictRegel->beschrijving ?>
          </div>
        </div>
      </div>
<?php endforeach; ?>
    </div>
  </div>


  <?php
  require APPROOT . '/views/inc/footer.php';
  ?>