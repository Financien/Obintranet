<?php
require APPROOT . '/views/inc/header.php';
?>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h4>Jubilarisen</h4>
      <hr>
    </div>
  </div>
  <div class="row">
        <div class="col">
        <table id="myTable" class="table table-responsive   " >
        <thead>
            <tr>
                <th>Dienstjaren</th>
                <th>Dienstonderdeel</th>
                <th>Achternaam</th>
                <th>Voornaam</th>
                <th>Gender</th>
                <th>Functieomschrijving</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($data['jubilarissen'] as $werknemer) : ?>
               <?php if (in_array($werknemer->dienstjaar, $data['jaren'])) : ?>
               <tr>
                    <td><?php echo $werknemer->dienstjaar ?></td>
                    <td><?php echo $werknemer->functie ?></td>
                    <td><?php echo $werknemer->naam ?></td>
                    <td><?php echo $werknemer->voornaam ?></td>
                    <td><?php echo $werknemer->gender_id ?></td>
                    <td><?php echo $werknemer->functie ?></td>
                    <td><?php echo $werknemer->email ?></td>

                </tr>
<?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</div>
</div>

<?php

require APPROOT . '/views/inc/footer.php';
?>