

<section id="product-cof" class="product">
	<div class="container">
		<div class="row">
			<div class="col-full col-md-4 col-sm-6">
				<div class="pro-img-wrap">
					<img class="product-img" src="images/book.jpg" alt="">
					<div class="share-pro">
						<div class="share-txt share-book">Поділитися</div>
						<div class="share-btns">
							<a href=""><img src="images/fb-share.png" alt=""></a>
							<a href=""><img src="images/g-share.png" alt=""></a>
							<a href=""><img src="images/ln-share.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-8 col-sm-6">
				<h1>i want to be a barista</h1>
				<h2>Holly brown</h2>

				<div class="clr"></div>

				<div class="product-price mb-20">285 грн</div>
				<div class="clr"></div>

				<div class="pull-left mt-10">
					<div class="ll">Кількість</div>
					<div class="counter">
						<input type="number" min="0" placeholder="1">
						<div class="counter-btns">
							<div class="btn-plus">+</div>
							<div class="btn-minus">-</div>
						</div>
						<div class="clr"></div>
					</div>
				</div>

				<div class="pull-left ml-20 add-to-busket">
					<a href="" class="btn-red">Додати в кошик</a>
				</div>

				<div class="clr"></div>



				<p>Once relegated to entry-level, part-time position work, the barista has only in the past few decades come to be a legitimate profession. This is thanks in great part to a number of trailblazers who managed to turn their passions into careers, with no clear model for success before them.</p>
				<p>Many of those trailblazers are featured in a new book published by Hong Kong’s Holly Brown Coffee called I Want to Be a Barista. In 150-plus full-color pages, the book tells the condensed stories of some of the world’s most well-known baristas, including 10 of the past 12 World Barista Champions. Many of the book’s subjects have expanded their professional capacities to also become roasters, green coffee buyers, coffee shop owners and consultants, and they are living examples of professional ingenuity in the specialty coffee world.</p>

			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row heading">
			<div class="col-xs-12">
				<h2>Також ми рекомендуєм</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<div class="k-wrap">
					<!-- arrows -->
					<div class="c-arrows c-prev icon-left-slider"></div>
					<div class="c-arrows c-next icon-right-slider"></div>

					<div class="k-carousel swiper-container">
				    <!-- Additional required wrapper -->
				    <div class="swiper-wrapper">
			        <!-- Slides -->
			        <div class="swiper-slide">
			        	<a href="" class="media-link">
			        		<span class="k-img">
			        			<img src="images/media.jpg" alt="">
			        			<span class="label"><img src="images/label1.png" alt=""></span>
			        		</span>
			        		<span class="media-name">God in a cup1</span>
			        	</a>
			        </div>

							<div class="swiper-slide">
								<a href="" class="media-link">
									<span class="k-img">
										<img src="images/media.jpg" alt="">
										<span class="label"><img src="images/label2.png" alt=""></span>
									</span>
									<span class="media-name">God in a cup2</span>
								</a>
							</div>

							<div class="swiper-slide">
								<a href="" class="media-link">
									<span class="k-img">
										<img src="images/media.jpg" alt="">
										<span class="label"><img src="images/label3.png" alt=""></span>
									</span>
									<span class="media-name">God in a cup3</span>
								</a>
							</div>

							<div class="swiper-slide">
								<a href="" class="media-link">
									<span class="k-img">
										<img src="images/media.jpg" alt="">
										<span class="label"><img src="images/label4.png" alt=""></span>
									</span>
									<span class="media-name">God in a cup4</span>
								</a>
							</div>

							<div class="swiper-slide">
								<a href="" class="media-link">
									<span class="k-img">
										<img src="images/media.jpg" alt="">
										<span class="label"><img src="images/label1.png" alt=""></span>
									</span>
									<span class="media-name">God in a cup5</span>
								</a>
							</div>

							<div class="swiper-slide">
								<a href="" class="media-link">
									<span class="k-img">
										<img src="images/media.jpg" alt="">
										<span class="label"><img src="images/label2.png" alt=""></span>
									</span>
									<span class="media-name">God in a cup6</span>
								</a>
							</div>
				   </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		var slider;
		$(window).resize(function(){
			slider.destroy();
			calc();
		});
		$(function(){
			calc();
		});

		function calc() {
			var w = $(window).width();
			var count = $('.k-carousel').find('.swiper-slide').size();
			var options = check(w, count);

			slider = new Swiper('.k-carousel', {
					prevButton: '.c-prev',
					nextButton: '.c-next',
			    speed: 400,
			    slidesPerView: options[0],
			    spaceBetween: 30,
			    autoplay: 5000,
			    loop: options[1]
			});

			slider.onResize();
		}

		function check(aW, aCount) {
			var needCount;

			switch(true) {
				case (aW < 546):
				needCount = 1;
				var loop = checkCount(needCount, aCount);
				break;

				case (aW < 768):
				needCount = 2;
				var loop = checkCount(needCount, aCount);
				break;

				case (aW < 992):
				needCount = 3;
				var loop = checkCount(needCount, aCount);
				break;

				case (aW < 1200):
				needCount = 4;
				var loop = checkCount(needCount, aCount);
				break;

				default:
				needCount = 5;
				var loop = checkCount(needCount, aCount);
				break;
			}

			return [needCount, loop];
		}

		function checkCount(aNeedCount, aCount) {
			var looped = true;

			if (aCount <= aNeedCount) {
				$('.c-prev, .c-next').hide();
				looped = false;
			}
			return looped;
		}
	</script>
</section>
