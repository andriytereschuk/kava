

<section id="menu">
	<script>
	$(function(){
		$('.menu-item').on('click', function(){
			var self = $(this);
			var iframeSrc = 'turnjs4/samples/' + self.attr("data-folder")+ '/index.html#' + self.attr("data-page");
			$('#myframe').attr('src', iframeSrc);
		});

		$('#album').on('hide.bs.modal', function () {
		  $('#myframe').removeAttr('src');
		})
	});
	</script>

	<!-- popap for menu album -->
	<div class="modal fade" id="album" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-menu">
	  		<div class="modal-content">
					<div class="close-popup" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i></div>
					<iframe id="myframe" src="" width="100%" height="100%" frameborder="0"></iframe>
				</div>
	  </div>
	</div>

	<div class="container">
		<div class="row ">
			<div class="col-xs-12">
				<h2>Меню</h2>

				<div class="thumb-menu">
					<a href="" data-page="page/1" data-folder="cafe1" data-toggle="modal" data-target="#album" class="menu-item">
						<img src="images/menu1.jpg" alt="">
						<span>Десерти</span>

					<a href="" data-page="page/2" data-folder="cafe1" data-toggle="modal" data-target="#album" class="menu-item">
						<img src="images/menu1.jpg" alt="">
						<span>Кава</span>

					<a href="" data-page="page/3" data-folder="cafe1" data-toggle="modal" data-target="#album" class="menu-item">
						<img src="images/menu1.jpg" alt="">
						<span>Сніданки</span>

					<a href="" data-page="page/4" data-folder="cafe1" data-toggle="modal" data-target="#album" class="menu-item">
						<img src="images/menu1.jpg" alt="">
						<span>Чай</span>

					<a href="" data-page="page/5" data-folder="cafe1" data-toggle="modal" data-target="#album" class="menu-item">
						<img src="images/menu1.jpg" alt="">
						<span>Шоколад, напої</span>			
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /MENU -->
</section>