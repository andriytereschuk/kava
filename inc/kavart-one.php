
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
			<!-- func-blok - not item -->
			<div class="grid-sizer"></div>

			<div class="grid-item item-1x1">
				<div class="item-img" style="background-image:url(images/kavart2.jpg)">
					<div class="item-desc item-bottom-left"><span></span><b>«Святий Миколай»</b></div>
				</div>
			</div>

			<div class="grid-item item-2x1">
				<div class="item-img" style="background-image:url(images/kavart10.jpg)">
					<div class="item-desc item-bottom-left white"><span>Остап Лозинський</span> <b>«Святий Миколай»</b></div>
				</div>
			</div>

			<div class="grid-item item-1x1">
				<div class="item-img" style="background-image:url(images/kavart3.jpg)">
					<div class="item-desc item-top-left"><span></span> <b>«Святий Миколай»</b></div>
				</div>
			</div>

			<div class="grid-item item-2x2">
				<div class="item-img" style="background-image:url(images/kavart8.jpg)">
					<div class="item-desc item-bottom-left"><span>Остап Лозинський</span> <b></b></div>
				</div>
			</div>

			<div class="grid-item item-1x2">
				<div class="item-img" style="background-image:url(images/kavart11.jpg)">
					<div class="item-desc"><span></span> <b></b></div>
				</div>
			</div>

			<div class="grid-item item-1x2">
				<div class="item-img" style="background-image:url(images/kavart12.jpg)">
					<div class="item-desc"><span>Остап Лозинський</span> <b>«Святий Миколай»</b></div>
				</div>
			</div>

			<div class="grid-item item-1x2">
				<div class="item-img" style="background-image:url(images/kavart4.jpg)">
					<div class="item-desc item-top-right"><span></span> <b>«Святий Миколай»</b></div>
				</div>
			</div>

			<div class="grid-item item-2x2">
				<div class="item-img" style="background-image:url(images/kavart1.jpg)">
					<div class="item-desc item-top-left"><span>Остап Лозинський</span> <b>«Святий Миколай»</b></div>
				</div>
			</div>

			<div class="grid-item item-1x1">
				<div class="item-img" style="background-image:url(images/kavart6.jpg)">
					<div class="item-desc item-bottom-left"><span></span> <b></b></div>
				</div>
			</div>

			<div class="grid-item item-1x1">
				<div class="item-img" style="background-image:url(images/kavart7.jpg)">
					<div class="item-desc item-bottom-left"><span></span> <b>«Святий Миколай»</b></div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="js/masonry.pkgd.min.js"></script>
	<script>
	$(window).load(function(){
		var window_resize;

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