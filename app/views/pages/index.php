<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/pages/slider.php'; ?>

  <!-- </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Vorige</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Volgende</span>
  </a>
</div> -->

<div class="container mt-3">
  <section>
    <div class="row text-center">
      <h4 class="">Quick Tabs</h4>
      <hr>
    </div>
    <div class="container-fluid content-row">
      <div class="row mt-3">
        <div class="col-md-3">
          <div class="card h-100">
            <div class="card-body text-center">
              <span class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="far fa-newspaper fa-stack-1x fa-inverse"></i>
              </span>
              <hr>
              <h5 class="card-title mt-2">Vacatures</h5>
              <p class="card-text">Sollicteren voor een nieuwe functie? bekijk onze vacatures</p>
              <a href="<?= URLROOT ?>pages/vacatures" class="btn btn-outline-primary btn-block">Go here</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card h-100">
            <div class="card-body text-center">
              <span class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="far fa-handshake fa-stack-1x fa-inverse"></i>
              </span>
              <hr>
              <h5 class="card-title mt-2">Personeelsbonden</h5>
              <p class="card-text">Het Ministerie van Financiën telt 2 personeelsbonden. Lees hier meer over de samenstellingen van onze personeelsbonden.</p>
              <a href="<?= URLROOT ?>pages/personeelbond" class="btn btn-outline-primary btn-block">Go here</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card h-100">
            <div class="card-body text-center">
              <span class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="far fa-calendar fa-stack-1x fa-inverse"></i>
              </span>
              <hr>
              <h5 class="card-title mt-2">Evenemementen</h5>
              <p class="card-text">Klik hier voor de komende activiteiten</p>
              <a href="<?= URLROOT ?>activiteiten/evenementen" class="btn btn-outline-primary btn-block">Go here</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card h-100">
            <div class="card-body text-center">
              <span class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                <i class="fas fa-book-open fa-stack-1x fa-inverse"></i>
              </span>
              <hr>
              <h5 class="card-title mt-2">Wetten</h5>
              <p class="card-text"> Heb hier toegang tot enkele digitale wetten </p>
              <a href="<?= URLROOT ?>pages/wetten" class="btn btn-outline-primary btn-block">Go here</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mt-3">

    <h3></h3>
    <hr>
    <div class="row">
      <div class="col-md-7">
      <img src = "<?= URLROOT ?>img/image_carousel.jpeg" height = "400" width = "600">
      </div>
      <div class="col-md-5">
        <div id='homeCalendar'></div>
      </div>
    </div>
  </section>

</div>

<!-- Button trigger modal -->
<button style="display: none" id="eventShow" type="button" class="btn btn-primary" data-toggle="modal" data-target="#eventModal"></button>

<!-- Modal -->
<div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="eventModalLabel">Oudejaarsviering</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>28 december 2018 Douanebond Tap Yari Fesa.</h4>
        <br>
        <p>Locatie: <b>Douane Hoofdkantoor</b></p>
        <p>Tijd: <b>13.00 - 00.00 uur</b></p>
        <p>Toegang: <b>SRD 20,-</b></p>

        28 december Oudejaarsviering voor leden van de Bond Personeel Dienst der Belastingen
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php
require APPROOT . '/views/inc/footer.php';
?>