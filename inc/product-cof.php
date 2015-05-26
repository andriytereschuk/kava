
<!-- PRODUCT COFE -->
<section id="product-cof" class="product">
	<div class="container">
		<div class="row">
			<div class="col-full col-md-7 col-lg-8 col-sm-6">
				<img class="product-img" src="images/san-hose-big.jpg" alt="">
			</div>

			<div class="col-md-5 col-lg-4 col-sm-6">
				<h1>Сан хосе</h1>
				<h2>гондурас</h2>
				<a href="" class="show-map">
					<i class="icon-location"></i>
					<span>Карта</span>
				</a>

				<div class="clr"></div>

				<div class="product-price">285 грн</div>
				<div class="product-weight">/ 250 г</div>

				<div class="clr"></div>

				<div class="product-code">
					<div class="ll">Акційний код </div>
					<div class="promo-code">FRG5HK</div>
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

				<a href="" class="more-about">Детальніше про сорт</a>

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