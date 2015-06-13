
<!-- PRODUCT COFE -->
<section id="product-cof" class="product">
	<div class="container">
		<div class="row">
			<div class="col-full col-md-7 col-lg-8 col-sm-6">
				<div class="pro-img-wrap">
					<img class="product-img" src="images/san-hose-big.jpg" alt="">
					<div class="share-pro">
						<div class="share-txt">Поділитися</div>
						<div class="share-btns">
							<a href=""><img src="images/fb-share.png" alt=""></a>
							<a href=""><img src="images/g-share.png" alt=""></a>
							<a href=""><img src="images/ln-share.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-5 col-lg-4 col-sm-6">
				<h1>Сан хосе</h1>
				<h2>гондурас</h2>
				<a href="" class="show-map" data-toggle="modal" data-target="#modalMap">
					<i class="icon-location"></i>
					<span>Карта</span>
				</a>

			<?php include_once('inc/map-popup.php'); ?>

				<div class="clr"></div>

				<div class="product-price">285 грн</div>
				<div class="product-weight">/ 250 г</div>

				<div class="clr"></div>

				<div class="product-code">
					<div class="ll">Акційний код </div>
					<div class="promo-code">
						<input type="text" class="in" maxlength="6" placeholder="">
					</div>
				</div>

				<div class="product-degree">
					<div class="ll">Ступінь помолу</div>
					<div class="select-wrap">
						<select class="select1">
							<option value="">Зерна</option>
							<option value="">Зерна2</option>
							<option value="">Зерна3</option>
						</select>

						<div class="select-arr">
							<i class="icon-select-arrow"></i>
						</div>
					</div>
				</div>

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

				<div class="pull-right add-to-busket">
					<a href="" class="btn-red">Додати в кошик</a>
				</div>

				<div class="clr"></div>

				<div class="more-about" data-toggle="modal" data-target="#myModal">Детальніше про сорт</div>

				<div class="prod-label mt-10">Опис:</div>
				<div class="clr"></div>
				<p>Аромат мигдалю та арахісу, з ніжним та дуже чистим смаком какао та карамелі та легкими горіховими нотками й середнім тілом.</p>

				<div class="prod-info" data-height="44">
					<div class="prod-wrap">
						<div class="prod-item">
							<div class="prod-label">Регіон</div>
							<div class="right-info">Ель Тріунфо, Колінас, Санта Барбара</div>
						</div>

						<div class="prod-item">
							<div class="prod-label">Висота</div>
							<div class="right-info">1400-1800 м</div>
						</div>

						<div class="prod-item">
							<div class="prod-label">Плантація</div>
							<div class="right-info">Кооператив Капукас</div>
						</div>

						<div class="prod-item">
							<div class="prod-label">Різновид</div>
							<div class="right-info">Катуай</div>
						</div>

						<div class="prod-item">
							<div class="prod-label">Процес</div>
							<div class="right-info">Митий</div>
						</div>

						<div class="prod-item">
							<div class="prod-label">Сертифікація</div>
							<div class="right-info">Organic</div>
						</div>

						<div class="prod-item">
							<div class="prod-label">Класифікація</div>
							<div class="right-info">Specialty, screen 17/18</div>
						</div>
					</div>
				</div>

				<div class="prod-info-expand">
					<i class="icon-select-arrow"></i>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
				<div class="flex-blok">
					<div class="flex-column col-prop">

						<div class="skillsPieChart" data-values='{"Кислинка": 8.5, "Післясмак": 10.0, "Загальне враження":8.0, "Однорідність":8.5, "Тіло":8.5, "Баланс":8.5, "Чиста чашка":8.0, "Аромат":8.5, "Солодкість":9.0, "Смак":9.0}'>							
								<div style="text-align: center;">
									<div class="chartCanvasWrap"></div>
								</div>								
						</div>

						<script src="js/jquery-radar-plus.js"></script>
						<script>
						$(function(){
							$('.skillsPieChart').radarChart({
							size: [380, 350],
							step: 2,
							color: [0,0,0],
							fixedMaxValue: 6,
							additionalLineDistance: false,
							showAxisLabels: false
							});
						});
						</script>
						
						<div class="props">
							<div class="row">
								<div class="col-sm-6">
									<div class="prop">
										<div class="prop-title">Аромат</div>
										<div class="prop-value">7</div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="prop">
										<div class="prop-title">Солодкість</div>
										<div class="prop-value">7</div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="prop">
										<div class="prop-title">Смак</div>
										<div class="prop-value">7</div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="prop">
										<div class="prop-title">Кислинка</div>
										<div class="prop-value">7</div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="prop">
										<div class="prop-title">Післясмак</div>
										<div class="prop-value">7</div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="prop">
										<div class="prop-title">Загальне враження</div>
										<div class="prop-value">7</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="prop">
										<div class="prop-title">Однорідність</div>
										<div class="prop-value">7</div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="prop">
										<div class="prop-title">Тіло</div>
										<div class="prop-value">7</div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="prop">
										<div class="prop-title">Баланс</div>
										<div class="prop-value">7</div>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="prop">
										<div class="prop-title">Чиста чашка</div>
										<div class="prop-value">7</div>
									</div>
								</div>

							</div>

							<div class="prop-main">
								<span class="prop-main-title">Загальна</span>
								<span class="prop-main-value">7</span>
							</div>
						</div>

					</div>
					<div class="flex-column">
						<div class="col-info">
							<h2>Сан хосе</h2>
							<p>У 1885 році Атанасіо Родольфо Ромеро, прадід сім’ї Родрігес-Ромеро, купив велику ділянку землі в районі Капукас, що в Гондурасі, та почав вирощувати тютюн і невелику кількість кави для власного споживання. 75 років потому його син Атанасіо Родольфо-Ромеро подорожував по Коста Ріці, де здобув навички щодо вирощування кави високої якості. Він перейшов від вирощування тютюну до кави та заклав основу для Капукас, що стала улюбленою кавою плантацій в Гондурасі.</p>
							<p>У 1999 році Омар Родрігес, зять Атанасіо, заснував кооператив Кафеталера Капукас Лімітіда (COCAFCAL).</p>
							<p>Капукас розташований на заході Гондурасу, поблизу відомого національного парку “Келагуа”, що означає відро води. Тисячі туристів відвідують цей регіон країни, там Ви зможете знайти відомі руїни майя. Земля поблизу цього маленького села є ідеальною для вирощування кави через хороші грунти та кліматичні умови і висоту зростання, що коливається в межах 1200-1800 мнрм.</p>
							<p>Кооператив виготовляє близько 181 т зеленої кави, що розкуповується за кілька тижнів після збору урожаю.</p>
							<p>У Капукасі кооператив встановив відмінну систему для вологої обробки зерен, нові сушильні машини та повністю </p>
						</div>
					</div>
				</div>
	      <div class="close-popup" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i></div>
	    </div>
	  </div>
	</div>

<script>
	$('.prod-info-expand').on('click', function() {
		var h1 = $('.prod-info').attr('data-height');
		var h2 = $('.prod-wrap').height();

		if($(this).hasClass('open')) {
			$('.prod-info').height(h1);
			$(this).removeClass('open');
		}

		else {
			 $('.prod-info').height(h2);
			 $(this).addClass('open');
		}
	})
</script>
</section>
<!-- /PRODUCT COFE -->