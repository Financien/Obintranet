
<<<<<<< HEAD
<?php 
if(count($data['sliders'])) {
?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php foreach ($data['sliders'] as $key => $slider) : ?>
    <?php echo ($key == 0 ? '<div class="carousel-item active">' : '<div class="carousel-item">'); ?>
      <img class="d-block w-100 sliderImg" src="<?php echo $slider->post_img; ?>" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h1><?php echo $slider->post_name; ?></h1>
        <p><?php echo $slider->post_content; ?></p>
      </div>
    </div>
    <?php endforeach; ?>    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php } ?>

