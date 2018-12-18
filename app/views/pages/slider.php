<?php 
if(count($data['posts']) > 0) {
?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php foreach ($data['posts'] as $key => $post) : ?>
    <?php echo ($key == 0 ? '<div class="carousel-item active">' : '<div class="carousel-item">'); ?>
      <img class="d-block w-100 sliderImg" src="<?php echo URLROOT . $post->post_img; ?>" alt="First slide">
      <!-- <div class="carousel-caption d-none d-md-block"> -->
        <!-- <h1><?php echo $post->post_name; ?></h1> -->
        <!-- <p><?php echo $post->post_content; ?></p> -->
      <!-- </div> -->
      <br>
      <center>
        <a href="pages/post/<?php echo $post->id; ?>" class="btn btn-lg btn-secondary">Lees meer...</a>
      </center>
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

