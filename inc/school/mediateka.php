
<!-- scholl slider -->
<section id="k-mediateka">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="h-link"><a href="">медіатека</a></div>
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
			console.log(options);

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
<!-- /end slider -->
