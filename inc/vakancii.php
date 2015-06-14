
<!-- Vakancii -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>вакансії</h1>
				
				<div class="x-scroll">
					<table class="v-table">
						<tr>
							<th>Вакансія</th>
							<th>Дата</th>
							<th>Місцезнаходження</th>
							<th></th>
						</tr>

						<tr>
							<td class="position">Офіціант</td>
							<td>14.04.2015 </td>
							<td>Львів, вул Кульпарківська 59</td>
							<td><a href="" class="red-btn pull-right" data-toggle="modal" data-target="#v-order">подати заявку</a></td>
						</tr>

						<tr>
							<td class="position">Адміністратор залу</td>
							<td>15 хв. тому</td>
							<td>Львів, вул Кульпарківська 59</td>
							<td><a href="" class="red-btn pull-right" data-toggle="modal" data-target="#v-order">подати заявку</a></td>
						</tr>
					</table>
				</div>

				<div class="page-nav"></div>

				<script src="js/jquery.simplePagination.js"></script>
				<script>
					$(function() {
					    $('.page-nav').pagination({
					        items: 30,
					        itemsOnPage: 4,
					        prevText: '<',
					        nextText: '>',
					        displayedPages: 3,
					        edges: 2,
					        onPageClick: function(pageNumber, event) {
					        	// Callback triggered when a page is clicked
					        	// Page number is given as an optional parameter
					        },
					        onInit: function() {
					        	// Callback triggered immediately after initialization
					        }
					    });
					});
				</script>


				<!-- попап -->
				<div class="modal fade" id="v-order" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog madal-login">
				  		<div class="modal-content">
								<div class="close-popup" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i></div>
								<h2>Заявка</h2>
								<input type="text" class="in" placeholder="Ім'я">
								<input type="email" class="in" placeholder="Email">
								<input type="email" class="in" placeholder="Телефон">
								<textarea class="area" placeholder="Повідомлення"></textarea>
								<a href="" class="red-btn large mb-20">Відправити</a>
							</div>
				  </div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- /Vakancii -->