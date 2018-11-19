<?php
require APPROOT . '/views/inc/header.php';
?>

<div class="container">
  <div class="row mt-3">
    <div class="col-md-4">
      <h4>Algemene Regels</h4>
      <hr>
    </div>
  </div>
  <div class="container">
    <div class="accordion" id="Ictaccordion">
    <?php foreach ($data['regels'] as $algemeneRegels) : ?>
      <div class="card mt-3">
        <div class="card-header" id="heading<?= $algemeneRegels->id ?>">
          <h5 class="mb-0">
            <button class="btn btn-link text-primary font-weight-bold  " type="button" data-toggle="collapse" data-target="#collapse<?= $algemeneRegels->id ?>" aria-expanded="true"
              aria-controls="collapse<?= $algemeneRegels->id ?>">
              <?= $algemeneRegels->naam ?>
              <span><i class="fas fa-chevron-down"></i></span>
            </button>
          </h5>
        </div>

        <div id="collapse<?= $algemeneRegels->id ?>" class="collapse " aria-labelledby="heading<?= $algemeneRegels->id ?>" data-parent="#Ictaccordion">
          <div class="card-body">
            <?= $algemeneRegels->beschrijving ?>
          </div>
        </div>
      </div>
<?php endforeach; ?>
    </div>
  </div>


  <?php
    require APPROOT . '/views/inc/footer.php';
    ?>