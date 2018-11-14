<?php
require APPROOT . '/views/inc/header.php';
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="first-slide img-fluid" src="https://via.placeholder.com/1920x1080" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-left">
          <h1>Example headline.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
            metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="second-slide img-fluid" src="https://via.placeholder.com/1920x1080" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
            metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="third-slide img-fluid" src="https://via.placeholder.com/1920x1080" alt="Third slide">
      <div class="container">
        <div class="carousel-caption text-right">
          <h1>One more for good measure.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
            metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container mt-3">
  <section>
    <div class="row text-center">
      <h4 class="">Quick Tabs</h4>
    </div>
    <div class="row mt-3">
      <div class="col-md-3">
        <div class="card">
          <div class="card-body text-center">
            <span class="fa-stack fa-2x">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fas fa-flag fa-stack-1x fa-inverse"></i>
            </span>
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">

          <div class="card-body text-center">
            <span class="fa-stack fa-2x">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fas fa-flag fa-stack-1x fa-inverse"></i>
            </span>
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body text-center">
            <span class="fa-stack fa-2x">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fas fa-flag fa-stack-1x fa-inverse"></i>
            </span>
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body text-center">
            <span class="fa-stack fa-2x">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fas fa-flag fa-stack-1x fa-inverse"></i>
            </span>
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mt-3">

    <h3>Opkomende Events</h3>
    <hr>
    <div class="row">
      <div class="col-md-7">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem natus ipsam vero explicabo ducimus impedit
          illo corporis quia culpa voluptates dolorem, facilis temporibus excepturi possimus esse obcaecati delectus
          dicta iste officia necessitatibus nesciunt recusandae quisquam nostrum at! Sed nobis, libero facilis eum
          alias magnam iste dignissimos distinctio at dolores inventore.</p>
      </div>
      <div class="col-md-5">
        <div id='homeCalendar'></div>
      </div>
    </div>
  </section>

</div>
<?php
require APPROOT . '/views/inc/footer.php';
?>