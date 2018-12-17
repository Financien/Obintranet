
<?php 
    require APPROOT . '/views/inc/header.php';
?>
<div class="container">
<section class="mt-3">
    <div class="row">
        <div class="col ">
            <h1 class="text-center"><?php echo $data->post_name; ?></h1>
            <center>
                <img class="post_img" src="<?php echo URLROOT . $data->post_img; ?>">
            </center>
             <hr>
            <p><?php echo $data->post_content; ?></p>
        </div>
    </div>
</section>
<a href="<?= URLROOT ?>" class="btn btn-secondary">Terug</a>
</div>

<?php 
require APPROOT . '/views/inc/footer.php';
?>