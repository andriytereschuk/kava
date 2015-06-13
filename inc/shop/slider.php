

<section id="slider-cafe">
	<div class="container">
		<h1>Крамниця</h1>
	</div>

	<div class="container container-full">
		<!-- Slider main container -->
		<div class="slider-top swiper-container">
		    <!-- Additional required wrapper -->
		    <div class="swiper-wrapper">
		        <!-- Slides -->
		        <div class="swiper-slide" style="background-image: url('images/shop.jpg');"></div>
		        <div class="swiper-slide" style="background-image: url('images/shop.jpg');"></div>
		        <div class="swiper-slide" style="background-image: url('images/shop.jpg');"></div>
		    </div>
		    <!-- If we need pagination -->
		    <div class="swiper-pagination"></div>
		</div>

		<script>
			$(function(){
				var slider = new Swiper('.slider-top', {
				    speed: 800,
				    pagination: '.swiper-pagination',
				    paginationClickable: true,
				    resistanceRatio: 0,
				    autoplay: 5000,
				    loop: true
				});
			});
		</script>
	</div>

	<div class="container">
		<div class="cafe-desc">
			<p>У 2012 році ТМ «Світ кави» запроваджує власне обсмаження зерна і виходить на ринок уже як виробник кави, яку самостійно привозить з плантацій, обсмажує і продає. Підприємство обирає дещо легший профіль обсмаження,  тож зерно краще зберігає свої особливості смаку та аромату. Окрім того, «Світ кави» поступово переходить від промислової кави до більш якісної, у тому числі кави преміум та спешіаліті. Особливість цієї кави в тім, що відомий увесь її шлях – він фермера до кінцевого споживача. При цьому до кожного з етапів існують високі вимоги: тільки за умови, що кава бездоганно пройшла усі етапи (збір, обробка, зберігання, доставка, обсмажування, пакування, приготування) вона має право називатися спешіаліті. 
Окрім того, кава від «Світу кави» - тільки свіжого обсмаження.</p>
		</div>
	</div>
</section>