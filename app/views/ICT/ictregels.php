<?php
require APPROOT . '/views/inc/header.php';
?>

<!-- <div class="mt-5">
 <div class="col-md-12">
            <div class="ml-5">
            <h3>ICT Regels</h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam gravida faucibus odio vel posuere. Morbi lacinia ex sed est imperdiet dignissim. Mauris posuere, velit quis elementum elementum, lectus justo faucibus nunc, non finibus tortor ex sed ante.</p>
             <img src="https://picsum.photos/400/600/?blur" class="rounded mx-auto d-block" alt="...">
             <div class=mt-3>
             <div class="text-center">
             <a href="#" class="btn btn-primary btn-lg" role="button">Download PDF</a>
            </div>
            </div>
            </div>
        </div>
        </div> -->

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h4>ICT Regels</h4>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <img src="https://picsum.photos/400/600/?blur" class="rounded" alt="...">
        </div>

        <div class="col">
            <div class="row">
                <h4>Beschrijving</h4>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam gravida faucibus odio vel posuere.
                    Morbi lacinia ex sed est imperdiet dignissim. Mauris posuere, velit quis elementum elementum,
                    lectus justo faucibus nunc, non finibus tortor ex sed ante.</p>
            </div>
            <div class="row">
                <a href="#" class="btn btn-danger btn-block" role="button"><i class="far fa-file-pdf"></i> Download</a>
            </div>
        </div>
    </div>
</div>
</div>


<?php
require APPROOT . '/views/inc/footer.php';
?>