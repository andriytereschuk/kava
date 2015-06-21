
<!-- scholl slider -->
<section id="k-slider">
	<!-- Slider main container -->
	<div class="k-slider swiper-container">
		<div class="parallax-bg" data-swiper-parallax="-12%"></div>
	    <!-- Additional required wrapper -->
	    <div class="swiper-wrapper">
	        <!-- Slides -->
	        <div class="swiper-slide">
	        		<div class="k-content">
	        			<div class="k-title" data-swiper-parallax="-100">Захоплюючі</div>
	        			<div class="k-subtitle" data-swiper-parallax="-200">уроки баріста</div>
	        			<div class="k-text" data-swiper-parallax="-300">
	        			    <span class="k-white">для тих, хто</span>
	        			    <span class="k-red">любить каву</span>
	        			</div>
	        			<br>
	        			<a href="" class="red-btn" data-swiper-parallax="-300">ПЕРЕГЛЯНУТИ КУРСИ</a>
	        		</div>
	        </div>

	        <div class="swiper-slide">
	        		<div class="k-content">
	        			<div class="k-title" data-swiper-parallax="-100">Захоплюючі</div>
	        			<div class="k-subtitle" data-swiper-parallax="-200">уроки баріста</div>
	        			<div class="k-text" data-swiper-parallax="-300">
	        			    <span class="k-white">для тих, хто</span>
	        			    <span class="k-red">любить каву</span>
	        			</div>
	        			<br>
	        			<a href="" class="red-btn" data-swiper-parallax="-300">ПЕРЕГЛЯНУТИ КУРСИ</a>
	        		</div>
	        </div>

	        <div class="swiper-slide">
	        		<div class="k-content">
	        			<div class="k-title" data-swiper-parallax="-100">Захоплюючі</div>
	        			<div class="k-subtitle" data-swiper-parallax="-200">уроки баріста</div>
	        			<div class="k-text" data-swiper-parallax="-300">
	        			    <span class="k-white">для тих, хто</span>
	        			    <span class="k-red">любить каву</span>
	        			</div>
	        			<br>
	        			<a href="" class="red-btn" data-swiper-parallax="-300">ПЕРЕГЛЯНУТИ КУРСИ</a>
	        		</div>
	        </div>
	    </div>
	    <!-- If we need pagination -->
	    <div class="swiper-pagination"></div>
	</div>

	<script>
		$(function(){
			var slider = new Swiper('.k-slider', {
			    speed: 600,
			    pagination: '.swiper-pagination',
			    paginationClickable: true,
			    parallax: true,
			    autoplay: 5000,
			    loop: false
			});
		});
	</script>
</section>
<!-- /end slider -->
