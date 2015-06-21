

<section id="k-course">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<link href='cal2/fullcalendar.css' rel='stylesheet' />
				<script src='cal2/moment.min.js'></script>
				<script src='cal2/fullcalendar.min.js'></script>
				<script src='cal2/lang-all.js'></script>
				<div id="calendar"></div>
			</div>

			<div class="col-sm-4">
				<div class="k-cource-list">
					<h2>курси</h2>
					<ul>
						<li><a href="">Баріста</a></li>
						<li><a href="">Обсмажка</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<script>
	$(function(){
		var w = $(window).width();
		var h = 600;
		if (w < 667) h = 550;
		$('#calendar').fullCalendar({
			header: {
				left:   'prev',
		    center: 'title',
		    right:  'next'
			},
			lang: 'uk',
			height: h,	
			firstDay: 1,
			editable: false,
			eventLimit: true,
			events: {
				url: 'cal2/php/get-events.php',
				error: function() {
					$('#script-warning').show();
				}
			},
			loading: function(bool) {
				$('#loading').toggle(bool);
			}
		});
	});
</script>
</section>
