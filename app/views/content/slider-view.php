<?php
    require_once "./app/views/inc/head.php";
    require_once "./config/server.php";
    use app\controllers\sliderController;

    $sliderController= new sliderController();

    $imagenesSlider=$sliderController->seleccionarImgSlider();

?>

<section>
			<div >
				<!-- Start Carousel -->
				<div id="carousel-demo" class="carousel">
				<?php foreach ($imagenesSlider as $imagen ): { ?>
                <img width="100%" src="<?php echo $imagen['slider_url']?>">
                <?php } endforeach; ?>
                    
				</div>
				<!-- End Carousel -->
			</div>
</section>

