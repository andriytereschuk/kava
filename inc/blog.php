<section id="blog">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Блог</h1>
			</div>
		</div>

		<div class="row">

			<div class="mobi-category">
				<h2>Категорії</h2>
				<ul></ul>
				<script>
					$(function(){
						var $categoryUl = $('.cat-nav > ul');
						var $categoryUlMoby = $('.mobi-category > ul');
						$categoryUlMoby.append($categoryUl.html());
					})
				</script>
			</div>

			<?php include_once('inc/posts.php'); ?>
			<?php include_once('inc/sidebar.php'); ?>
		</div>
	</div>
</section>