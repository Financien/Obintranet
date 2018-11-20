<?php
require APPROOT . '/views/inc/header.php';
?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-4">
            <h4>Gepensioeneerden</h4>
            <hr>
        </div>
    </div>

    <div class="row">
    <table id="gepensioneerdenTable" class="table table-responsive   " >
        <thead>
            <tr>
                <th>Department</th>
                <th>Dienstonderdeel</th>
                <th>Achternaam</th>
                <th>Voornaam</th>
                <th>Gender</th>
                <th>Functieomschrijving</th>
                <th>Email</th>
                <th>Pensioen Datum</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($data['gepensioeneerden'] as $gepensioeneerd) : ?>
                <tr>
                    <td><?php echo $gepensioeneerd->afdeling_id ?></td>
                    <td><?php echo $gepensioeneerd->functie ?></td>
                    <td><?php echo $gepensioeneerd->naam ?></td>
                    <td><?php echo $gepensioeneerd->voornaam ?></td>
                    <td><?php echo $gepensioeneerd->gender_id ?></td>
                    <td><?php echo $gepensioeneerd->functie ?></td>
                    <td><?php echo $gepensioeneerd->email ?></td>
                    <td><?php echo $gepensioeneerd->pensiondatum ?></td>

                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php
    require APPROOT . '/views/inc/footer.php';
    ?>