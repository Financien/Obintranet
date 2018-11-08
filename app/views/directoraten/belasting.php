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
            <h3>::Directoraat Naam</h3>
            <hr>
            <p>::Directoraat beschrijving</p>
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
        <table id="myTable" class="table" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        </div>
    </div>
    </section>
</div>

<?php
require APPROOT . '/views/inc/footer.php';
?>