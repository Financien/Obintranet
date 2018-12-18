
<?php 
    require APPROOT . '/views/inc/header.php';
?>
<div class="container">
<section class="mt-3">
    <div class="row">
        <div class="col ">
            <h1 class="text-center"><?php echo $data->post_name; ?></h1>
            <hr>
            <!-- <center>
                <img class="post_img" src="<?php echo URLROOT . $data->post_img; ?>">
            </center>
             <hr> -->
            <?php echo $data->post_content; ?>
        </div>
    </div>
</section>
<br>
<a href="<?= URLROOT ?>" class="btn btn-secondary">Terug</a>
</div>

<?php 
require APPROOT . '/views/inc/footer.php';
?>