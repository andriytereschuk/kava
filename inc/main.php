
<!-- MAIN -->
<section id="main">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-xs-12">
				<!-- Slider main container -->
				<div class="slider-middle swiper-container">
				    <!-- Additional required wrapper -->
				    <div class="swiper-wrapper">
				        <!-- Slides -->
				        <div class="swiper-slide" style="background-image: url('images/slide1.jpg');">
				        	<span class="slider-title" data-swiper-parallax="-400" data-swiper-parallax-duration="700"><i class="slider-icon icon-new"></i>сорти кави</span>
				        	<br>
				        	<span class="slider-title2" data-swiper-parallax="-300" data-swiper-parallax-duration="650">з південної америки</span>
				        </div>
				        <div class="swiper-slide" style="background-image: url('images/slide1.jpg');">
				        	<span class="slider-title" data-swiper-parallax="-400" data-swiper-parallax-duration="700"><i class="slider-icon icon-new"></i>сорти кави</span>
				        	<br>
				        	<span class="slider-title2" data-swiper-parallax="-300" data-swiper-parallax-duration="650">з південної америки</span>
				        </div>
				        <div class="swiper-slide" style="background-image: url('images/slide1.jpg');">
				        	<span class="slider-title" data-swiper-parallax="-400" data-swiper-parallax-duration="700"><i class="slider-icon icon-new"></i>сорти кави</span>
				        	<br>
				        	<span class="slider-title2" data-swiper-parallax="-300" data-swiper-parallax-duration="650">з південної америки</span>
				        </div>
				    </div>
				    <!-- If we need pagination -->
				    <div class="swiper-pagination"></div>
				</div>

				<script>
					$(function(){
						var slider = new Swiper('.slider-middle', {
						    speed: 600,
						    pagination: '.swiper-pagination',
						    paginationClickable: true,
						    resistanceRatio: 0,
						    parallax: true,
						    autoplay: 5000,
						    loop: true
						});
					});
				</script>
			</div>

			<div class="col-md-4 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-sm-6">
						<a href="" class="link-side-4">
							<img src="images/san-hose.jpg" alt="">
							<span class="link-overlay">
								<span class="link-text">
									<h3>гондурас</h3>
									<h2>Сан хосе</h2>
								</span>

								<span class="more">детальніше</span>
							</span>
						</a>
					</div>
					<div class="col-md-12 col-sm-6">
						<a href="" class="link-side-4">
							<img src="images/perl.jpg" alt="">
							<span class="link-overlay">
								<span class="link-text">
									<h3>бразилія</h3>
									<h2>Перл</h2>
								</span>

								<span class="more">детальніше</span>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- banners -->
		<div class="row banners">
			<div class="col-md-4 col-sm-6">
				<a href="" class="link-side-4">
					<img src="images/banner1.jpg" alt="">
					<span class="link-overlay">
						<span class="more">детальніше</span>
					</span>
				</a>
			</div>

			<div class="col-md-4 col-sm-6">
				<a href="" class="link-side-4">
					<img src="images/banner2.jpg" alt="">
					<span class="link-overlay">
						<span class="more">детальніше</span>
					</span>
				</a>
			</div>

			<div class="col-md-4 col-sm-6">
				<a href="" class="link-side-4">
					<img src="images/map.jpg" alt="">
					<span class="link-overlay">
						<span class="link-text">
							<h3>тут можна скуштувати</h3>
							<h2>нашу каву</h2>
						</span>

						<span class="more">детальніше</span>
					</span>
				</a>
			</div>
		</div>

		<!-- categories -->
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-6">
				<a href="" class="link-cat">
					<img src="images/cat1.jpg" alt="">

					<span class="link-overlay">
						<span class="link-text">
							<h2>Аксесуари</h2>
						</span>

						<span class="more">детальніше</span>
					</span>
				</a>
			</div>

			<div class="col-md-6 col-sm-12 col-xs-6">
				<a href="" class="link-cat">
					<img src="images/cat2.jpg" alt="">

					<span class="link-overlay">
						<span class="link-text">
							<h2>обладнання</h2>
						</span>

						<span class="more">детальніше</span>
					</span>
				</a>
			</div>
		</div>

		<!-- recomendations -->
		<?php include_once('inc/recomendations.php'); ?>

	</div>
</section>
<!-- /MAIN -->