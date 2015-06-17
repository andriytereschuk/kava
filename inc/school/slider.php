
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

<!-- scholl slider -->
<section id="k-course">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<link href='cal2/fullcalendar.css' rel='stylesheet' />
				<script src='cal2/moment.min.js'></script>
				<script src='cal2/fullcalendar.min.js'></script>
				<script src='cal2/lang-all.js'></script>
				<div id="calendar"></div>
			</div>

			<div class="col-sm-4">
				<div class="k-cource-list">
					<h2>курси</h2>
					<ul>
						<li><a href="">Баріста</a></li>
						<li><a href="">Обсмажка</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<script>
	$(function(){
		var w = $(window).width();
		var h = 600;
		if (w < 667) h = 550;
		$('#calendar').fullCalendar({
			header: {
				left:   'prev',
		    center: 'title',
		    right:  'next'
			},
			lang: 'uk',
			height: h,	
			firstDay: 1,
			editable: false,
			eventLimit: true,
			events: {
				url: 'cal2/php/get-events.php',
				error: function() {
					$('#script-warning').show();
				}
			},
			loading: function(bool) {
				$('#loading').toggle(bool);
			}
		});
	});
	</script>
</section>