
<header>
	<div class="container">

		<!-- info popup -->
		<div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog madal-login">
		  		<div class="modal-content">
						<div class="modal-info">
							Товар додано в корзину
						</div>
					</div>
		  </div>
		</div>

		<script>
		$(function(){
			$('#info').modal('show');

			setTimeout( function() {
				$('#info').modal('hide');
			}, 2000);
		});
		</script>
		<!-- /info popup -->

		<div class="search">
			<i class="icon-search-big"></i>
			<input type="text" placeholder="Пошук">
		</div>
		
		<div class="row">
			<div class="col-sm-2 col-xs-4">
				<a href="" class="logo" title="Світ Кави">
					<img src="images/logo.png" alt="">
				</a>
				<div class="menu-btn"></div>
			</div>

			<div class="col-sm-10 col-xs-8">

				<div class="top-right">
					<a href="" class="basket-btn">
						<i class="icon-basket"></i>
						<span>кошик</span>
					</a>

					<div class="profile">
						<a href="" data-toggle="modal" data-target="#login" class="login-btn">
							<i class="icon-user"></i>
							<span>Логін</span>
						</a>
					</div>

					<!-- Логін попап -->
					<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog madal-login">
					  		<div class="modal-content">
									<div class="close-popup" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i></div>
									<h2>Логін</h2>
									<input type="text" class="in" placeholder="Логін">
									<input type="password" class="in" placeholder="Пароль">

									<div class="check-blok">
										<div class="check">
											<input type="checkbox" checked="checked">
											<div class="check-anim"><i class="icon-check"></i></div>
										</div>

										Запам'ятати мене
									</div>

									<a href="" class="red-btn large">Логін</a>

									<a href="" class="forgot pull-left">Забули пароль?</a>
									<a href="reg.php" class="to-reg pull-right">Реєстрація</a>
									<div class="clr"></div>
									<div class="align-center">Ввійти через:</div>

									<div class="align-center soc-enter">
										<a href=""><img src="images/fb.png" alt=""></a>
										<a href=""><img src="images/g+.png" alt=""></a>
									</div>
								</div>
					  </div>
					</div>

					<div class="lang">
						<a href="" class="active">Ua</a> / <a href="">Pl</a>
					</div>
				</div>
				<div class="clr"></div>

				<nav>
					<div class="icon-close-menu icon-close-btn"></div>
					<span class="icon-search"></span>

					<ul>
						<li><a onclick="return false;" href="javascript:void(0);">Магазин</a>
							<div class="menu2">
								  <ul class="menu2-nav">
								    <li class="active">
								    	<a href="#tab1" data-toggle="tab">Кава</a>
								    	<ul class="mobi-lvl3"></ul>
								    </li>

								    <li>
								    	<a href="#tab2" data-toggle="tab">Обладнання</a>
								    	<ul class="mobi-lvl3"></ul>
								    </li>

								    <li>
								    	<a href="#tab3" data-toggle="tab">Аксесуари</a>
								    	<ul class="mobi-lvl3"></ul>
								    </li>

								    <li>
								    	<a href="#tab4" data-toggle="tab">гурт</a>
								    	<ul class="mobi-lvl3"></ul>
								    </li>
								  </ul>

								  <!-- Tab panes -->
								  <div class="tab-content">
								    <div class="tab-pane active" id="tab1">
								    	<div class="row">
								    		<div class="col-md-2 col-sm-4">
								    			<a href="">Вся кава</a>
								    			<a href="">Акції</a>
								    			<a href="">Підписка на каву</a>
								    			<a href="">Кава для офісів</a>
								    		</div>

								    		<div class="col-md-2 col-sm-4">
								    			<a href="">Африка</a>
								    			<a href="">Південна Америка</a>
								    			<a href="">Азія</a>
								    		</div>

								    		<div class="col-md-2 col-sm-4">
								    			<a href="">Моносорти</a>
								    			<a href="">Суміші</a>
								    			<a href="">Альтернатива</a>
								    		</div>

								    		<div class="col-md-2 col-sm-4">
								    			<a href="">Ароматизовані</a>
								    			<a href="">Без кофеїну</a>
								    			<a href="">Органік</a>
								    		</div>
								    	</div>
								    </div>

								    <div class="tab-pane" id="tab2">
								    	<div class="row">
								    		<div class="col-md-2 col-sm-4">
								    			<a href="">Африка</a>
								    			<a href="">Південна Америка</a>
								    			<a href="">Азія</a>
								    		</div>

								    		<div class="col-md-2 col-sm-4">
								    			<a href="">Моносорти</a>
								    			<a href="">Суміші</a>
								    			<a href="">Суміші</a>
								    			<a href="">Альтернатива</a>
								    		</div>

								    		<div class="col-md-2 col-sm-4">
								    			<a href="">Ароматизовані</a>
								    			<a href="">Без кофеїну</a>
								    			<a href="">Органік</a>
								    		</div>
								    	</div>
								    </div>
								    <div class="tab-pane" id="tab3">
								    	<div class="row">
								    		<div class="col-md-2 col-sm-4">
								    			<a href="">Моносорти</a>
								    			<a href="">Суміші</a>
								    			<a href="">Альтернатива</a>
								    		</div>

								    		<div class="col-md-2 col-sm-4">
								    			<a href="">Ароматизовані</a>
								    			<a href="">Без кофеїну</a>
								    			<a href="">Органік</a>
								    		</div>
								    	</div>
								    </div>
								    <div class="tab-pane" id="tab4">
								    	<div class="row">
								    		<div class="col-md-2 col-sm-4">
								    			<a href="">Африка</a>
								    			<a href="">Південна Америка</a>
								    			<a href="">Азія</a>
								    			<a href="">Азія</a>
								    		</div>

								    		<div class="col-md-2 col-sm-4">
								    			<a href="">Моносорти</a>
								    			<a href="">Суміші</a>
								    			<a href="">Альтернатива</a>
								    		</div>

								    		<div class="col-md-2 col-sm-4">
								    			<a href="">Ароматизовані</a>
								    			<a href="">Без кофеїну</a>
								    			<a href="">Органік</a>
								    		</div>
								    	</div>
								    </div>
								  </div>
							</div>
						</li>
						<li><a href="">Компанія</a></li>
						<li><a href="">Школа</a></li>
						<li><a href="">Блог</a></li>
						<li><a href="">Контакти</a></li>
					</ul>

					<div class="mobile-soc">
						<a href="">
							<i class="icon-fs"></i>
						</a>

						<a href="">
							<i class="icon-vimeo"></i>
						</a>

						<a href="">
							<i class="icon-flickr"></i>
						</a>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>

<!-- CONTENT -->
<div id="content">