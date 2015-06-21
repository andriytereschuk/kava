

<section id="events">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Події</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-3">
				<a class="event-link" href="">
					<img src="images/event1.jpg" alt="">
					<span class="event-date">03.03.15</span>
					<span class="event-title">Курси баріста</span>
					<span class="event-desc">Цей курс навчання буде цікавий як для початківців, так і для працюючих барменів...</span>
				</a>
			</div>

			<div class="col-sm-3">
				<a class="event-link" href="">
					<img src="images/event2.jpg" alt="">
					<span class="event-date">03.03.15</span>
					<span class="event-title">Прокидайся з нами!</span>
					<span class="event-desc">Цей курс навчання буде цікавий як для початківців, так і для працюючих барменів...</span>
				</a>
			</div>

			<div class="col-sm-3">
				<a class="event-link" href="">
					<img src="images/event3.jpg" alt="">
					<span class="event-date">03.03.15</span>
					<span class="event-title">Замовляйте у нас чудові  подарунки</span>
					<span class="event-desc">Цей курс навчання буде цікавий як для початківців, так і для працюючих барменів...</span>
				</a>
			</div>

			<div class="col-sm-3">
				<a class="event-link" href="">
					<img src="images/event4.jpg" alt="">
					<span class="event-date">03.03.15</span>
					<span class="event-title">Професіональні курси баріста</span>
					<span class="event-desc">Цей курс навчання буде цікавий як для початківців, так і для працюючих барменів...</span>
				</a>
			</div>

			<div class="col-sm-3">
				<a class="event-link" href="">
					<img src="images/event1.jpg" alt="">
					<span class="event-date">03.03.15</span>
					<span class="event-title">Курси баріста</span>
					<span class="event-desc">Цей курс навчання буде цікавий як для початківців, так і для працюючих барменів...</span>
				</a>
			</div>

			<div class="col-sm-3">
				<a class="event-link" href="">
					<img src="images/event2.jpg" alt="">
					<span class="event-date">03.03.15</span>
					<span class="event-title">Прокидайся з нами!</span>
					<span class="event-desc">Цей курс навчання буде цікавий як для початківців, так і для працюючих барменів...</span>
				</a>
			</div>

			<div class="col-sm-3">
				<a class="event-link" href="">
					<img src="images/event3.jpg" alt="">
					<span class="event-date">03.03.15</span>
					<span class="event-title">Замовляйте у нас чудові  подарунки</span>
					<span class="event-desc">Цей курс навчання буде цікавий як для початківців, так і для працюючих барменів...</span>
				</a>
			</div>

			<div class="col-sm-3">
				<a class="event-link" href="">
					<img src="images/event4.jpg" alt="">
					<span class="event-date">03.03.15</span>
					<span class="event-title">Професіональні курси баріста</span>
					<span class="event-desc">Цей курс навчання буде цікавий як для початківців, так і для працюючих барменів...</span>
				</a>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<!-- ======================== -->

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
			</div>
		</div>
	</div>
</section>