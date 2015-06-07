

<section id="slider-cafe">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
					<h1>Кав'ярня 'Світ кави'</h1>

					<!-- Slider main container -->
					<div class="slider-top swiper-container">
					    <!-- Additional required wrapper -->
					    <div class="swiper-wrapper">
					        <!-- Slides -->
					        <div class="swiper-slide" style="background-image: url('images/cafe1.jpg');"></div>
					        <div class="swiper-slide" style="background-image: url('images/cafe1.jpg');"></div>
					        <div class="swiper-slide" style="background-image: url('images/cafe1.jpg');"></div>
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

					<div class="cafe-desc">
						<p>У 2004 році «Світ кави» відкриває власну кав’ярню, завдяки чому споживання якісної кави набирає більших масштабів. З кожним роком кав’ярня розвивається: до меню вводяться нові напої, запроваджуються альтернативні способи приготування кави, виробляється власна філософія кави, яка вирізняє кав’ярню серед інших. Баріста кав’ярні – постійні учасники Всеукраїнських кавових Чемпіонатів, деякі з них – сертифіковані судді, які входять до суддівських колегій чемпіонатів. 
				Баріста Наталія Остапюк – переможець Всеукраїнських Чемпіонатів Баріста у 2011 та 2013 році і 
				представляла Україну на Світових Чемпіонатах Баріста.</p>
					</div>
			</div>
		</div>
	</div>
</section>