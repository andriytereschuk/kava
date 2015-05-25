
<div class="row products">
	<div class="product-arrows product-prev icon-left-slider"></div>
	<div class="product-arrows product-next icon-right-slider"></div>

	<div class="products-wrap">
		<div class="product-item col-md-4 col-sm-6 col-xs-12">
			<a href="" class="pro">
				<img src="images/pro1.jpg" alt="">

				<span class="link-overlay">
					<span class="more">детальніше</span>
				</span>
				<h2><b>Hario</b> Ручна кавомолка</h2>
				<span class="pro-price">1700 грн</span>
			</a>
		</div>

		<div class="product-item col-md-4 col-sm-6 col-xs-12">
			<a href="" class="pro">
				<img src="images/pro2.jpg" alt="">

				<span class="link-overlay">
					<span class="more">детальніше</span>
				</span>
				<h2><b>Горнятко</b> для кави</h2>
				<span class="pro-price">160 грн</span>
			</a>
		</div>

		<div class="product-item col-md-4 col-sm-6 col-xs-12">
			<a href="" class="pro">
				<img src="images/pro3.jpg" alt="">

				<span class="link-overlay">
					<span class="more">детальніше</span>
				</span>
				<h2><b>C 2013</b> Кавова машина</h2>
				<span class="pro-price">960 €</span>
			</a>
		</div>
	</div>
</div>

<script>
	$(function(){
		// recomendations
		// add slider on mobile
		productSlider();
		$(window).on('resize', function() {
			productSlider();
		});

		function productSlider() {
			var w = $(window).width(),
					$products = $('.products'),
					$productsWrap = $('.products-wrap'),
					$productItem = $('.product-item');

			if(w <= 767) {
				$products.addClass('swiper-container').addClass('products-slider');
				$productsWrap.addClass('swiper-wrapper');
				$productItem.addClass('swiper-slide');

				var slider2 = new Swiper('.products-slider', {
			    speed: 400,
			    resistanceRatio: 0,
			    loop: true,
			    nextButton: '.product-prev',
			    prevButton: '.product-next'
				});
			}

			else {
				$products.removeClass('swiper-container').removeClass('products-slider');
				$productsWrap.removeClass('swiper-wrapper');
				$productItem.removeClass('swiper-slide');
				$productsWrap.removeAttr("style");
				$productItem.removeAttr("style");
				$productsWrap.find('.swiper-slide-duplicate').remove();
			}
		}
	});
</script>