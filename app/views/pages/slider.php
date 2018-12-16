

<?php foreach ($data['slider'] as $sliders) : ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel" align = "center">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="first-slide img-fluid" src="img/Rij en voertuigenbelasting.jpg" alt="First slide" height="720" width="1280" >
      <div class="container">
        <div class="carousel-caption text-center">
          <h1><? $sliders->post_name?></h1>
          <p><? $sliders->post_content?></p>
          <a class="btn btn-lg btn-outline-primary" href="#" role="button">Lees meer</a></p>
        </div>
      </div>
    </div>
    <?php endforeach; ?>