

<section id="slider-cafe">
	<div class="container">
		<h1>партнери</h1>
	</div>

	<div class="container">
		<div class="cafe-desc">
			<p>Кав’ярня, що славиться своєю кавою та унікально приємною атмосферою та
неодноразово перемагала у конкурсі та ставала найкращою кав’ярнею року.
Найкращі сорти кави, чаю, смачні десерти, чудовий музичний фон та, без перебільшення, 
особливі відвідувачі – все це створює незабутню ауру.</p>
		</div>
	</div>

	<div class="container container-grid">
		<div class="p-grid">

			<div class="p-grid-item">
				<div class="partner">
					<div class="partner-flex">
						<img src="images/partner1.jpg" alt="">
					</div>
					<div class="partner-name">Fairtrade</div>
					<a href="http://fairtrade.net" target="_blank" class="partner-link">www.fairtrade.net</a>
				</div>
			</div>

			<div class="p-grid-item">
				<div class="partner">
					<div class="partner-flex">
						<img src="images/partner2.jpg" alt="">
					</div>
					<div class="partner-name">UTZ Certified</div>
					<a href="http://utzcertified.org" target="_blank" class="partner-link">www.utzcertified.org</a>
				</div>
			</div>

			<div class="p-grid-item">
				<div class="partner">
					<div class="partner-flex">
						<img src="images/partner3.jpg" alt="">
					</div>
					<div class="partner-name">Cup of Excellence</div>
					<a href="http://allianceforcoffeeexcellence.org" target="_blank" class="partner-link">www.allianceforcoffeeexcellence.org</a>
				</div>
			</div>

			<div class="p-grid-item">
				<div class="partner">
					<div class="partner-flex">
						<img src="images/partner4.jpg" alt="">
					</div>
					<div class="partner-name">C.A.F.E. Practices</div>
					<a href="http://scsglobalservices.com" target="_blank" class="partner-link">www.scsglobalservices.com</a>
				</div>
			</div>

			<div class="p-grid-item">
				<div class="partner">
					<div class="partner-flex">
						<img src="images/partner5.jpg" alt="">
					</div>
					<div class="partner-name">USDA ORGANIC</div>
					<a href="http://usda.gov" target="_blank" class="partner-link">www.usda.gov</a>
				</div>
			</div>

			<div class="p-grid-item">
				<div class="partner">
					<div class="partner-flex">
						<img src="images/partner6.jpg" alt="">
					</div>
					<div class="partner-name">Rainforest alliance</div>
					<a href="http://rainforest-alliance.org" target="_blank" class="partner-link">www.rainforest-alliance.org</a>
				</div>
			</div>

			<div class="p-grid-item">
				<div class="partner">
					<div class="partner-flex">
						<img src="images/partner7.jpg" alt="">
					</div>
					<div class="partner-name">IECAFÉ Cursos  </div>
					<a href="http://iecafe.es" target="_blank" class="partner-link">www.iecafe.es</a>
				</div>
			</div>

			<div class="p-grid-item">
				<div class="partner">
					<div class="partner-flex">
						<img src="images/partner8.jpg" alt="">
					</div>
					<div class="partner-name">Neumann Kaffee Gruppe (NKG) </div>
					<a href="http://nkg.net" target="_blank" class="partner-link">www.nkg.net</a>
				</div>
			</div>

			<div class="p-grid-item">
				<div class="partner">
					<div class="partner-flex">
						<img src="images/partner9.jpg" alt="">
					</div>
					<div class="partner-name">Mare Terra</div>
					<a href="http://fincasdecafe.es" target="_blank" class="partner-link">www.fincasdecafe.es</a>
				</div>
			</div>
		</div>
	</div>

	<script src="js/masonry.pkgd.min.js"></script>
	<script>
	$(function() {

		var $grid = $('.p-grid').masonry({
		  itemSelector: '.p-grid-item',
		 	percentPosition: true,
		  isInitLayout: false
		});

		// bind event
		$grid.masonry( 'on', 'layoutComplete', function() {
		  $('.p-grid-item').addClass('grid-item-anim');
		  setTimeout(function(){
		  	$('.p-grid-item').removeClass('grid-item-anim').addClass('grid-item-shown');
		  }, 700);
		});

		// manually trigger initial layout
		$grid.masonry();
	});
	</script>
</section>