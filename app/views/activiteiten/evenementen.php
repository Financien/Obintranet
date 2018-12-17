<?php
require APPROOT . '/views/inc/header.php';
?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-4">
            <h4>Evenementen</h4>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div id="eventCalender"></div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->
<button style="display: none" id="eventShow" type="button" class="btn btn-primary" data-toggle="modal" data-target="#eventModal">
  
</button>

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