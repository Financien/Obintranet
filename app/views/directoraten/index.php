<?php
require APPROOT . '/views/inc/header.php';
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-3">
            <img class="img img-fluid rounded-circle" src="https://via.placeholder.com/300" alt="">
        </div>
        <div class="col-md-9">
            <div class="ml-5">
            <h3><?= $data['directoraat']->directoraat; ?></h3>
            <hr>
            <p><?= $data['directoraat']->beschrijving; ?></p>
            <div class="mt-5">
                <span><i class="fas fa-map-marker-alt"></i> Adres. : <?= $data['directoraat']->adress; ?></span>
                <br>
                <span><i class="fas fa-phone"></i> Telefoonnr. : <?= $data['directoraat']->telefoon; ?></span>


            </div>
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
                <th>Geboorte-datum</th>
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
                    <td><?php echo $werknemer->leeftijd ?></td>
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