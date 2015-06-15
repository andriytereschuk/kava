
<!-- Kavart-one -->
<section id="kavart-one">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Kavart</h1>
				<div class="kv-txt">
						<p>Найважливіша кавова подія року, Український Кавовий Фестиваль відбудеться у «найкавовішому» місті країни, — Львові, за підтримки кави Buondi. Професіонали з’їдуться з усіх куточків України, щоб виявити найкращих баріста і каптестерів.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container container-grid">
		<div class="grid">
			<div class="grid-item grid-sizer"></div>
			<div class="grid-item width-2">
				<div class="item-img">
					<img src="images/kavart1.jpg" alt="">
						<div class="item-desc item-bottom-left"><span>Уляна Нищук-Борисяк</span> <b>«ХАТНЯ»</b></div>
					</div>
			</div>

			<div class="grid-item">
				<div class="item-img">
					<img src="images/kavart2.jpg" alt="">
					<div class="item-desc item-bottom-left"><span>Оля Кравченко</span> <b>«Покрова»</b></div>
				</div>
			</div>

			<div class="grid-item">
				<div class="item-img">
					<img src="images/kavart3.jpg" alt="">
						<div class="item-desc"><span></span> <b></b></div>
					</div>
			</div>

			<div class="grid-item">
				<div class="item-img">
					<img src="images/kavart4.jpg" alt="">
					<div class="item-desc item-top-right"><span>Уляна Нищук-Борисяк</span> <b>«Миколай»</b></div>
				</div>
			</div>

			<div class="grid-item">
				<div class="item-img">
					<img src="images/kavart5.jpg" alt="">
					<div class="item-desc item-top-left"><span>Уляна Нищук-Борисяк</span> <b>«Параскева»</b></div>
				</div>
			</div>

			<div class="grid-item">
				<div class="item-img">
					<img src="images/kavart6.jpg" alt="">
					<div class="item-desc item-bottom-left"><span>Остап Лозинський</span> <b>«Святий Миколай»</b></div>
				</div>
			</div>

			<div class="grid-item">
				<div class="item-img">
					<img src="images/kavart7.jpg" alt="">
					<div class="item-desc"><span></span> <b></b></div>
				</div>
			</div>

			<div class="grid-item">
				<div class="item-img">
					<img src="images/kavart8.jpg" alt="">
					<div class="item-desc item-bottom-left"><span>Оля Кравченко</span> <b></b></div>
				</div>
			</div>

			<div class="grid-item">
				<div class="item-img">
					<img src="images/kavart9.jpg" alt="">
					<div class="item-desc item-bottom-left"><span>Остап Лозинський</span> <b>«Покрова»</b></div>
				</div>
			</div>

			<div class="grid-item">
				<div class="item-img">
					<img src="images/kavart11.jpg" alt="">
					<div class="item-desc item-bottom-left"><span>Уляна Нищук-Борисяк</span> <b>«Покрова»</b></div>
				</div>
			</div>

			<div class="grid-item">
				<div class="item-img">
					<img src="images/kavart12.jpg" alt="">
					<div class="item-desc item-bottom-left"><span>Уляна Нищук-Борисяк</span> <b>«Різдво»</b></div>
				</div>
			</div>

			<div class="grid-item width-2">
				<div class="item-img">
					<img src="images/kavart10.jpg" alt="">
					<div class="item-desc item-bottom-left white"><span>Ромко Зілінко</span> <b>«Різдво» (шопка)</b></div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="js/masonry.pkgd.min.js"></script>
	<script>
	$(function(){
		var $grid = $('.grid').masonry({
		  itemSelector: '.grid-item',
		 	percentPosition: true,
		  isInitLayout: false
		});

		// bind event
		$grid.masonry( 'on', 'layoutComplete', function() {
		  $('.grid-item').addClass('grid-item-anim');
		  setTimeout(function(){
		  	$('.grid-item').removeClass('grid-item-anim').addClass('grid-item-shown');
		  }, 700);
		});

		// manually trigger initial layout
		$grid.masonry();
	});
	</script>
</section>
<!-- /Kavart-one -->