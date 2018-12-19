<?php
require APPROOT . '/views/inc/header.php';
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-3">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?= URLROOT ?>/img/directoraten/<?= $data['directoraat'] -> foto; ?>" alt="First slide" height="250" width="400">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
</div>            
    <!-- <img src="<?= URLROOT ?>/img/directoraten/<?= $data['directoraat'] -> foto; ?> " alt="" height="300" width="300"> -->
        </div>
        <div class="col-md-9">
            <div class="ml-5">
            <h3><?= $data['directoraat']->directoraat; ?></h3>
            <hr>
            <p><?= $data['directoraat']->beschrijving; ?></p>
            <hr>
            <?php foreach($data['contacten'] as $contact) : ?>
            <div class="mt-3">
                <span><i class="fas fa-map-marker-alt"></i> Adres. : <?= $contact->adress; ?></span>
                <br>
                <span><i class="fas fa-phone"></i> Telefoonnr. : <?= $contact->telefoon; ?></span>
                <br>
                <span><i class="fa fa-envelope"></i> Email. : <?= $contact->email;?><span>
                <br>
            </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    <section class="mt-3">
    <div class="row mb-5">
        <h4>Werknemers</h4>
        <hr>
    </div>
    <div class="row">
        <div class="col">
        <table id="myTable" class="table table-responsive   " >
        <thead>
            <tr>
                <th>Naam</th>
                <th>Voornaam</th>
                <th>Geslacht</th>
                <th>Afdeling</th>
                <th>Functie</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($data['werknemers'] as $werknemer) : ?>
                <tr>

                    <td><?php echo $werknemer->naam ?></td>
                    <td><?php echo $werknemer->voornaam ?></td>
                    <td><?php echo $werknemer->gender ?></td>
                    <td><?php echo $werknemer->naam_afdeling ?></td>
                    <td><?php echo $werknemer->functie ?></td>
                    <td><a href="mailto:<?php echo $werknemer->email ?>"><?php echo $werknemer->email ?></a></td>

                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
    </section>
</div>

<?php
require APPROOT . '/views/inc/footer.php';
?>